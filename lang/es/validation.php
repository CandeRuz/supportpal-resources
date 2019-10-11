<?php

return array(

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

    "accepted"                  => "The :attribute debe ser aceptadx.",
    "active_url"                => "The :attribute no es una URL válida.",
    "after"                     => "The :attribute must be a date after :date.",
    "alpha"                     => "The :attribute solo puede contener letras.",
    "alpha_dash"                => "The :attribute solo puede contener letras, números y guiones.",
    "alpha_num"                 => "The :attribute solo puede contener letras y números.",
    "array"                     => "The :attribute debe ser una matriz.",
    "before"                    => "The :attribute must be a date before :date.",
    "between"                   => array(
        "numeric" => "The :attribute must be between :min and :max.",
        "file"    => "The :attribute debe tener entre :min y :max kilobytes.",
        "string"  => "The :attribute debe tener entre :min y :max caracteres.",
        "array"   => "The :attribute debe tener entre :min y :max items.",
    ),
    "boolean"                   => "The :attribute field must be true or false.",
    "confirmed"                 => "The :attribute confirmation does not match.",
    "date"                      => "The :attribute no es una fecha válida.",
    "date_format"               => "The :attribute no se corresponde con el formato :format.",
    "different"                 => "The :attribute y :other tienen que ser diferentes.",
    "digits"                    => "The :attribute debe tener :digits dígitos.",
    "digits_between"            => "The :attribute debe tener entre :min y :max dígitos.",
    "email"                     => "The :attribute debe ser una dirección de correo electrónico válida.",
    "exists"                    => "The selected :attribute is invalid.",
    "image"                     => "The :attribute debe ser una imagen.",
    "in"                        => "The selected :attribute is invalid.",
    "integer"                   => "The :attribute must be an integer.",
    "ip"                        => "The :attribute debe ser una dirección IP válida.",
    "max"                       => array(
        "numeric" => "The :attribute may not be greater than :max.",
        "file"    => "The :attribute no debe tener más de :max kilobytes.",
        "string"  => "The :attribute no debe tener más de :max caracteres.",
        "array"   => "The :attribute no debe tener más de :max items.",
    ),
    "mimes"                     => "The :attribute must be a file of type: :values.",
    "min"                       => array(
        "numeric" => "The :attribute must be at least :min.",
        "file"    => "The :attribute debe tener al menos :min kilobytes.",
        "string"  => "The :attribute debe tener al menos :min caracteres.",
        "array"   => "The :attribute debe tener al menos :min items.",
    ),
    "not_in"                    => "The selected :attribute is invalid.",
    "numeric"                   => "The :attribute debe ser un número.",
    "regex"                     => "The :attribute format is invalid.",
    "required"                  => "The :attribute field is required.",
    "required_if"               => "The :attribute field is required when :other is :value.",
    "required_with"             => "The :attribute field is required when :values is present.",
    "required_with_all"         => "The :attribute field is required when :values is present.",
    "required_without"          => "The :attribute field is required when :values is not present.",
    "required_without_all"      => "The :attribute field is required when none of :values are present.",
    "same"                      => "The :attribute y :other deben corresponderse.",
    "size"                      => array(
        "numeric" => "The :attribute must be :size.",
        "file"    => "The :attribute debe tener :size kilobytes.",
        "string"  => "The :attribute debe tener :size caracteres.",
        "array"   => "The :attribute debe contener :size items.",
    ),
    "unique"                    => "The :attribute has already been taken.",
    "url"                       => "The :attribute format is invalid.",
    "timezone"                  => "The :attribute debe ser una zona válida.",
    "template_exists"           => "The selected :attribute is invalid.",
    "is_valid_captcha"          => "El código captcha introducido es inválido o incorrecto. Por favor, inténtalo de nuevo.",
    "user_password_length"      => "La contraseña debe ser igual o más larga que :user_password_length caracteres.",
    "operator_password_length"  => "La contraseña debe ser igual o más larga que :operator_password_length caracteres.",
    "json"                      => "The :attribute debe ser un JSON válido.",
    "user_password_strength"    => "The :attribute must contain: :user_password_strength.",
    "operator_password_strength" => "The :attribute must contain: :operator_password_strength.",
    "twig_lint"                 => "The :attribute must be valid twig syntax, please check http://twig.sensiolabs.org/doc/templates.html",

    /*
     * 2.1.0
     */
    "in_array"                  => "The :attribute field does not exist in :other.",
    "logo"                      => "The logo must point to a valid image file (direct URL or relative file path to base directory).",

    /*
     * 2.1.1
     */
    "old_password"              => "The :attribute field is invalid.",
    
    /*
     * 2.2.0
     */
    "required_with_translation" => "The :translation translation for the :attribute field is required when :values is present.",
    "max_translation"           => "The :translation translation for the :attribute field may not be greater than :max characters.",
    "unique_translation"        => "The :translation translation for the :attribute field has already been taken.",
    
    /*
     * 2.3.0
     */
    "required_translation"      => "The :translation translation for the :attribute field is required.",
    "customfield_not_cyclic"    => "The field cannot depend on one of it's children.",
    "distinct"                  => "The :attribute field has a duplicate value.",
    
    /*
     * 2.3.1
     */
    "is_slug"                   => "The slug field can only contain alphanumeric characters, please percent encode any special characters.",
    "article_type_slug_unique"  => "The slug has already been taken.",
    "article_tag_slug_unique"   => "The slug has already been taken.",
    "article_category_slug_unique" => "The slug has already been taken.",
    "article_slug_unique"       => "The slug has already been taken.",
    "department_exists"         => "El departamento seleccionado es inválido.",
    "captcha_required"          => "Se requiere el captcha.",
    "ticket_number_format"      => "El formato del número del ticket es inválido.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "The :attribute must be a date after or equal to :date.",
    "before_or_equal"           => "The :attribute must be a date before or equal to :date.",
    "dimensions"                => "The :attribute tiene dimensiones de imagen inválidas.",
    "distinct"                  => 'The :attribute field has a duplicate value.',
    "file"                      => "The :attribute debe ser un archivo.",
    "filled"                    => "The :attribute field must have a value.",
    "gt"                        => array(
        "numeric" => "The :attribute must be greater than :value.",
        "file"    => "The :attribute must be greater than :value kilobytes.",
        "string"  => "The :attribute must be greater than :value characters.",
        "array"   => "The :attribute must have more than :value items.",
    ),
    "gte"                       => array(
        "numeric" => "The :attribute must be greater than or equal :value.",
        "file"    => "The :attribute must be greater than or equal :value kilobytes.",
        "string"  => "The :attribute must be greater than or equal :value characters.",
        "array"   => "The :attribute must have :value items or more.",
    ),
    "in_array"                  => "The :attribute field does not exist in :other.",
    "ipv4"                      => "The :attribute must be a valid IPv4 address.",
    "ipv6"                      => "The :attribute must be a valid IPv6 address.",
    "json"                      => "The :attribute must be a valid JSON string.",
    "lt"                        => array(
        "numeric" => "The :attribute must be less than :value.",
        "file"    => "The :attribute must be less than :value kilobytes.",
        "string"  => "The :attribute must be less than :value characters.",
        "array"   => "The :attribute must have less than :value items.",
    ),
    "lte"                       => array(
        "numeric" => "The :attribute must be less than or equal :value.",
        "file"    => "The :attribute must be less than or equal :value kilobytes.",
        "string"  => "The :attribute must be less than or equal :value characters.",
        "array"   => "The :attribute must not have more than :value items.",
    ),
    "mimetypes"                 => "The :attribute must be a file of type: :values.",
    "not_regex"                 => "The :attribute format is invalid.",
    "present"                   => "The :attribute field must be present.",
    "required_unless"           => "The :attribute field is required unless :other is in :values.",
    "string"                    => "The :attribute must be a string.",
    "timezone"                  => "The :attribute must be a valid zone.",
    "uploaded"                  => "The :attribute failed to upload.",

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

    "custom" => array(
        "roles.*" => array(
            "exists" => "La función seleccionada no es válida.",
        ),
        "category.*.type" => array(
            "required" => "Se deben seleccionar uno o más tipos de auto-servicio.",
        ),
        "category.*.categories" => array(
            'required' => "Se requieren una o más categorías cuando se ha seleccionado un tipo de auto-servicio.",
            "exists"   => "Una o más de las categorías seleccionadas no es válida.",
        ),
        "brand.*" => array(
            "exists" => "La marca seleccionada no es válida.",
        ),
        "signature.*.*.contents" => array(
            "twig_lint" => "Each signature must be valid twig syntax, please check http://twig.sensiolabs.org/doc/templates.html"
        ),
        "template.*.*.subject" => array(
            "required" => "El campo del asunto es obligatorio para cada correo.",
            "min" => "Cada campo de asunto debe tener más de 1 caracter.",
            "max" => "Cada campo de asunto debe tener menos de 255 caracteres.",
        ),
        "template.*.*.contents" => array(
            "required" => "El campo de contenidos es neccesario para cada correo.",
            "min" => "Cada campo de contenidos debe tener más de 1 caracter.",
            "twig_lint" => "Each contents field must be valid twig syntax, please check http://twig.sensiolabs.org/doc/templates.html"
        ),
    ),

    /*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as Email Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

    "attributes" => array(),

);
