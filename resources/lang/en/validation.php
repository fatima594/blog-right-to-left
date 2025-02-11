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

    "accepted"         => ":attribute must be accepted.",
    "active_url"       => ":attribute is not a valid URL.",
    "after"            => ":attribute must be a date after :date.",
    "alpha"            => ":attribute may only contain letters.",
    "alpha_dash"       => ":attribute may only contain letters, numbers, and dashes.",
    "alpha_num"        => ":attribute may only contain letters and numbers.",
    "array"            => ":attribute must be an array.",
    "before"           => ":attribute must be a date before :date.",
    "between"          => [
        "numeric" => ":attribute must be between :min and :max.",
        "file"    => ":attribute must be between :min and :max kilobytes.",
        "string"  => ":attribute must be between :min and :max characters.",
        "array"   => ":attribute must have between :min and :max items.",
    ],
    "boolean"          => "The :attribute field must be true or false.",
    "confirmed"        => ":attribute confirmation does not match.",
    "date"             => ":attribute is not a valid date.",
    "date_format"      => ":attribute does not match the format :format.",
    "different"        => ":attribute and :other must be different.",
    "digits"           => ":attribute must be :digits digits.",
    "digits_between"   => ":attribute must be between :min and :max digits.",
    'dimensions'       => ":attribute has invalid image dimensions.",
    "email"            => ":attribute must be a valid email address.",
    "exists"           => "The selected :attribute is invalid.",
    "filled"           => "The :attribute field is required.",
    "image"            => ":attribute must be an image.",
    "in"               => "The selected :attribute is invalid.",
    "integer"          => ":attribute must be an integer.",
    "ip"               => ":attribute must be a valid IP address.",
    "max"              => [
        "numeric" => ":attribute may not be greater than :max.",
        "file"    => ":attribute may not be greater than :max kilobytes.",
        "string"  => ":attribute may not be greater than :max characters.",
        "array"   => ":attribute may not have more than :max items.",
    ],
    "mimes"            => ":attribute must be a file of type: :values.",
    "min"              => [
        "numeric" => ":attribute must be at least :min.",
        "file"    => ":attribute must be at least :min kilobytes.",
        "string"  => ":attribute must be at least :min characters.",
        "array"   => ":attribute must have at least :min items.",
    ],
    "not_in"           => "The selected :attribute is invalid.",
    "numeric"          => ":attribute must be a number.",
    "regex"            => ":attribute format is invalid.",
    "required"         => "The :attribute field is required.",
    "required_if"      => ":attribute field is required when :other is :value.",
    "required_with"    => ":attribute field is required when :values is present.",
    "required_with_all" => ":attribute field is required when :values are present.",
    "required_without" => ":attribute field is required when :values is not present.",
    "required_without_all" => ":attribute field is required when none of :values are present.",
    "same"             => ":attribute and :other must match.",
    "size"             => [
        "numeric" => ":attribute must be :size.",
        "file"    => ":attribute must be :size kilobytes.",
        "string"  => ":attribute must be :size characters.",
        "array"   => ":attribute must contain :size items.",
    ],
    "string"           => ":attribute must be a string.",
    "timezone"         => ":attribute must be a valid zone.",
    "unique"           => ":attribute has already been taken.",
    'uploaded'         => ":attribute failed to upload.",
    "url"              => ":attribute format is invalid.",

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
        'adult_id' => [
            'required' => 'Please choose some parents!',
        ],
        'group_id' => [
            'required' => 'Please choose a group or choose temp!',
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

    'attributes' => [
        "name"                      => "name",
        'firstName'                 => 'first name',
        "username"                  => "username",
        "email"                     => "email address",
        "first_name"                => "first name",
        "last_name"                 => "last name",
        "lastName"                  => "last name",
        "family"                    => "family name",
        "password"                  => "password",
        "password_confirmation"     => "password confirmation",
        "description"               => "description",
        "city"                      => "city",
        "country"                   => "country",
        "address"                   => "address",
        "phone"                     => "phone",
        "mobile"                    => "mobile",
        "cellphone"                 => "mobile",
        "age"                       => "age",
        "sex"                       => "sex",
        "gender"                    => "gender",
        "day"                       => "day",
        "month"                     => "month",
        "year"                      => "year",
        "hour"                      => "hour",
        "minute"                    => "minute",
        "second"                    => "second",
        "title"                     => "title",
        "text"                      => "text",
        "content"                   => "content",
        "excerpt"                   => "excerpt",
        "date"                      => "date",
        "time"                      => "time",
        "available"                 => "available",
        "size"                      => "size",
        "file"                      => "file",
        "fullname"                  => "full name",
        "postal_code"               => "postal code",
        "comment"                   => "comment",
        "body"                      => "body",
        "image"                     => "image",
        "photos"                    => "photos",
        "photo"                     => "photo",
        "cat_id"                    => "category",
        "published_at"              => "publication date",
        "reference_id"              => "reference",
        "priority_id"               => "priority",
        "category_id"               => "category",
        "tag"                       => "tags",
        "status"                    => "status",
    ],
];
