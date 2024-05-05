<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute կետը պետք է ընդունվի:',
    'active_url'           => ':attribute արժեքը վավեր URL չէ:',
    'after'                => ':attribute դաշտը պետք է լինի ամսաթիվ :date-ից հետո։',
    'after_or_equal'       => ':attribute դաշտը պետք է լինի ամսաթիվ :date-ին հավասար կամ դրանից հետո։',
    'alpha'                => ':attribute դաշտը կարող է պարունակել միայն տառեր:',
    'alpha_dash'           => ':attribute դաշտը կարող է պարունակել միայն տառեր, թվեր և գծիկներ:',
    'alpha_num'            => ':attribute դաշտը կարող է պարունակել միայն տառեր և թվեր:',
    'array'                => ':attribute արժեքը պետք է լինի զանգված:',
    'before'               => ':attribute դաշտը պետք է լինի ամսաթիվ :date-ից առաջ:',
    'before_or_equal'      => ':attribute դաշտը պետք է լինի :date-ին հավասար ամսաթիվ կամ դրանից առաջ:',
    'between'              => [
        'numeric' => ':attribute արժեքը պետք է լինի :min -ի և :max -ի միջև:',
        'file'    => ':attribute արժեքը պետք է լինի :min կբ-ի և :max կբ-ի միջև:',
        'string'  => ':attribute արժեքը պետք է լինի :min և :max նիշերի միջև:',
        'array'   => ':attribut արժեքը պետք է ունենա :min -ից :max տարր:',
    ],
    'boolean'              => ':attribute արժեքը պետք է լինի true կամ false:',
    'confirmed'            => ':attribute արժեքի հաստատումը չի համընկնում:',
    'date'                 => ':attribute արժեքը անվավեր ամսաթիվ է:',
    'date_format'          => ':attribute արժեքը չի համապատասխանում :format ձևաչափին:',
    'different'            => ':attribute և :other արժեքները պետք է տարբեր լինեն:',
    'digits'               => ':attribute արժեքը պետք է լինի :digits նիշ:',
    'digits_between'       => ':attribute արժեքը պետք է լինի :min-ից :max նիշերի միջև:',
    'dimensions'           => ':attribute պատկերը ունի չթույլատրված չափեր:',
    'distinct'             => 'attribute արժեքը կրկնվում է:',
    'email'                => ':attribute արժեքը պետք է լինի վավեր էլեկտրոնային հասցե:',
    'exists'               => 'Ընտրված :attribute արժեքը արդեն գոյություն ունի:',
    'file'                 => ':attribute -ը պետք է ֆայլ լինի:',
    'filled'               => ':attribute դաշտը պետք է ունենա արժեք:',
    'image'                => 'attribute արժեքը պետք է նկար լինի:',
    'in'                   => 'Ընտրված :attribute արժեքը անվավեր է:',
    'in_array'             => ':attribute արժեքը գոյություն չունի :other -ում:',
    'integer'              => ':attribute արժեքը պետք է լինի ամբողջ թիվ:',
    'ip'                   => ':attribute արժեքը պետք է լինի վավեր IP հասցե:',
    'ipv4'                 => ':attribute արժեքը պետք է լինի վավեր IPv4 հասցե:',
    'ipv6'                 => ':attribute արժեքը պետք է լինի վավեր IPv6 հասցե:',
    'json'                 => ':attribute արժեքը պետք է լինի վավեր JSON:',
    'max'                  => [
        'numeric' => ':attribute արժեքը չպետք է լինի :max-ից ավելի:',
        'file'    => ':attribute արժեքը չպետք է լինի :max կբ-ից ավելի:',
        'string'  => ':attribute արժեքը չպետք է լինի :max նիշից ավելի:',
        'array'   => ':attribute արժեքը չպետք է ունենա :max-ից ավելի տարր:',
    ],
    'mimes'                => ':attribute ֆայլը պետք է պատկանի հետևյալ ձևաչափերից մեկին՝ :values :',
    'mimetypes'            => ':attribute ֆայլը պետք է լինի հետևյալ տեսակներից մեկը՝ :values։',
    'min'                  => [
        'numeric' => ':attribute արժեքը պետք է լինի գոնե :min :',
        'file'    => ':attribute արժեքը պետք է լինի գոնե :min կբ:',
        'string'  => 'attribute արժեքը պետք է լինի գոնե :min նիշ:',
        'array'   => ':attribute արժեքը պետք է ունենա գոնե :min տարր:',
    ],
    'not_in'               => 'Ընտրված :attribute արժեքը անվավեր է:',
    'not_regex'            => ':attribute -ի ձևաչափը անվավեր է:',
    'numeric'              => ':attribute արժեքը պետք է լինի թիվ:',
    'present'              => ':attribute արժեքը պետք է առկա լինի:',
    'regex'                => ':attribute ձևաչափը անվավեր է:',
    'required'             => ':attribute դաշտը պարտադիր է:',
    'required_if'          => ':attribute դաշտը պարտադիր է, երբ :other -ը :value է:',
    'required_unless'      => ':attribute դաշտը պարտադիր է, եթե :other-ը չի գտնվում :values արժեքների մեջ:',
    'required_with'        => ':attribute դաշտը պարտադիր է, երբ :values առկա է:',
    'required_with_all'    => ':attribute դաշտը պարտադիր է, երբ :values առկա է:',
    'required_without'     => ':attribute դաշտը պարտադիր է, երբ :values բացակայում է:',
    'required_without_all' => ':attribute դաշտը պարտադիր է, երբ բոլոր :values -ը բացակայում են:',
    'same'                 => ':attribute և :other արժեքները պետք է համընկնեն:',
    'size'                 => [
        'numeric' => ':attribute -ը պետք է լինի :size :',
        'file'    => ':attribute -ը պետք է լինի :size կիլոբայթ:',
        'string'  => ':attribute -ը պետք է ունենա :size նիշ:',
        'array'   => ':attribute արժեքը պետք է պարունակի :size տարր:',
    ],
    'string'               => ':attribute արժեքը պետք է լինի string.',
    'timezone'             => ':attribute արժեքը պետք է լինի վավեր գոտի:',
    'unique'               => ':attribute արժեքն արդեն զբաղեցված է:',
    'uploaded'             => ':attribute ֆայլի վերբեռնումը ձախողվեց:',
    'url'                  => ':attribute ձևաչափը անվավեր է:',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
