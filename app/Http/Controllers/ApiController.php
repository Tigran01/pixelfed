<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseApiController;
use App\{
    Like,
    Profile
};
use Auth;
use Cache;
use Illuminate\Http\Request;
use App\Services\SuggestionService;

class ApiController extends BaseApiController
{
    // todo: deprecate and remove
    public function hydrateLikes(Request $request)
    {
        return response()->json([]);
    }

    public function siteConfiguration(Request $request)
    {
        $res = Cache::remember('api:site:configuration', now()->addMinutes(30), function() {
            return [
                'uploader' => [
                    'max_photo_size' => config('pixelfed.max_photo_size'),
                    'max_caption_length' => config('pixelfed.max_caption_length'),
                    'album_limit' => config('pixelfed.max_album_length'),
                    'image_quality' => config('pixelfed.image_quality'),

                    'optimize_image' => config('pixelfed.optimize_image'),
                    'optimize_video' => config('pixelfed.optimize_video'),

                    'media_types' => config('pixelfed.media_types'),
                    'enforce_account_limit' => config('pixelfed.enforce_account_limit')
                ],

                'activitypub' => [
                    'enabled' => config('pixelfed.activitypub_enabled'),
                    'remote_follow' => config('pixelfed.remote_follow_enabled')
                ],

                'ab' => [
                    'lc' => config('exp.lc'),
                    'rec' => config('exp.rec'),
                ],
            ];
        });
        return response()->json($res);
    }

    public function userRecommendations(Request $request)
    {
        abort_if(!Auth::check(), 403);
        abort_if(!config('exp.rec'), 400);

        $id = Auth::user()->profile->id;

        $following = Cache::get('profile:following:'.$id, []);
        $ids = SuggestionService::get();

        $res = Cache::remember('api:local:exp:rec:'.$id, now()->addMinutes(5), function() use($id, $following, $ids) {

            array_push($following, $id);

            return Profile::select(
                'id',
                'username'
            )
            ->whereNotIn('id', $following)
            ->whereIn('id', $ids)
            ->whereIsPrivate(0)
            ->whereNull('status')
            ->whereNull('domain')
            ->inRandomOrder()
            ->take(3)
            ->get()
            ->map(function($item, $key) {
                return [
                    'id' => $item->id,
                    'avatar' => $item->avatarUrl(),
                    'username' => $item->username,
                    'message' => 'Recommended for You'
                ];
            });
        });

        return response()->json($res->all());
    }

}
