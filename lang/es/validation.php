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

    "accepted"                  => "El campo de :attribute debe ser aceptado.",
    "active_url"                => "The :attribute no es una URL válida.",
    "after"                     => "El campo de :attribute debe ser una fecha posterior a :date.",
    "alpha"                     => "El campo de :attribute solo puede contener letras.",
    "alpha_dash"                => "El campo de :attribute solo puede contener letras, números y guiones.",
    "alpha_num"                 => "El campo de :attribute solo puede contener letras y números.",
    "array"                     => "El campo de :attribute debe ser una matriz.",
    "before"                    => "El campo de :attribute debe ser una fecha anterior a :date.",
    "between"                   => array(
        "numeric" => "El campo de :attribute debe estar entre :min y :max.",
        "file"    => "El campo de :attribute debe tener entre :min y :max kilobytes.",
        "string"  => "El campo de :attribute debe tener entre :min y :max caracteres.",
        "array"   => "El campo de :attribute debe tener entre :min y :max items.",
    ),
    "boolean"                   => "El campo de :attribute debe ser verdadero o falso.",
    "confirmed"                 => "The :attribute confirmation does not match.",
    "date"                      => "El campo de :attribute no es una fecha válida.",
    "date_format"               => "El campo de :attribute no se corresponde con el formato :format.",
    "different"                 => "El campo de :attribute y de :other tienen que ser diferentes.",
    "digits"                    => "El campo de :attribute debe tener :digits dígitos.",
    "digits_between"            => "El campo de :attribute debe tener entre :min y :max dígitos.",
    "email"                     => "El campo de :attribute debe ser una dirección de correo electrónico válida.",
    "exists"                    => "El campo de :attribute seleccionado es inválido.",
    "image"                     => "EL campo de :attribute debe ser una imagen.",
    "in"                        => "The selected :attribute is invalid.",
    "integer"                   => "El campo de :attribute debe ser un entero.",
    "ip"                        => "El campo de :attribute debe ser una dirección IP válida.",
    "max"                       => array(
        "numeric" => "El campo de :attribute no debe ser más grande que :max.",
        "file"    => "El campo de :attribute no debe tener más de :max kilobytes.",
        "string"  => "El campo de :attribute no debe tener más de :max caracteres.",
        "array"   => "El campo de :attribute no debe tener más de :max items.",
    ),
    "mimes"                     => "The :attribute must be a file of type: :values.",
    "min"                       => array(
        "numeric" => "The :attribute must be at least :min.",
        "file"    => "El campo de :attribute debe tener al menos :min kilobytes.",
        "string"  => "El campo de :attribute debe tener al menos :min caracteres.",
        "array"   => "El campo de :attribute debe tener al menos :min items.",
    ),
    "not_in"                    => "The selected :attribute is invalid.",
    "numeric"                   => "El campo de :attribute debe ser un número.",
    "regex"                     => "The :attribute format is invalid.",
    "required"                  => "El campo de :attribute es obligatorio.",
    "required_if"               => "El campo de :attribute es obligatorio cuando :other es :value.",
    "required_with"             => "El campo de :attribute es obligatorio cuando :values está presente.",
    "required_with_all"         => "El campo de :attribute es obligatorio cuando :values está presente.",
    "required_without"          => "El campo de :attribute es obligatorio cuando :values no está presente.",
    "required_without_all"      => "El campo de :attribute es obligatorio cuando ninguno de :values están presentes.",
    "same"                      => "El campo de :attribute y de :other deben corresponderse.",
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
    "user_password_strength"    => "El campo de :attribute debe contener: :user_password_strength.",
    "operator_password_strength" => "El campo de :attribute debe contener: :operator_password_strength.",
    "twig_lint"                 => "The :attribute must be valid twig syntax, please check http://twig.sensiolabs.org/doc/templates.html",

    /*
     * 2.1.0
     */
    "in_array"                  => "El campo de :attribute no existe en :other.",
    "logo"                      => "The logo must point to a valid image file (direct URL or relative file path to base directory).",

    /*
     * 2.1.1
     */
    "old_password"              => "El campo de :attribute es inválido.",
    
    /*
     * 2.2.0
     */
    "required_with_translation" => "La traducción en :translation para el campo de :attribute es obligatoria cuando :values está presente.",
    "max_translation"           => "La traduccón en :translation para el campo de :attribute no debe tener más de :max caracteres.",
    "unique_translation"        => "La traducción en :translation para el campo de :attribute ya se está usando.",
    
    /*
     * 2.3.0
     */
    "required_translation"      => "La traducción en :translation para el campo de :attribute es obligatoria.",
    "customfield_not_cyclic"    => "The field cannot depend on one of it's children.",
    "distinct"                  => "El campo de :attribute tiene un valor duplicado.",
    
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
    "after_or_equal"            => "El campo de :attribute debe ser una fecha posterior o igual a :date.",
    "before_or_equal"           => "El campo de :attribute debe ser una fecha anterior o igual a :date.",
    "dimensions"                => "The :attribute tiene dimensiones de imagen inválidas.",
    "distinct"                  => 'El campo de :attribute tiene un valor duplicado.',
    "file"                      => "The :attribute debe ser un archivo.",
    "filled"                    => "El campo de :attribute debe tener un valor.",
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
    "in_array"                  => "El campo de :attribute no existe en :other.",
    "ipv4"                      => "El campo de :attribute debe ser una dirección IPv4 válida.",
    "ipv6"                      => "El campo de :attribute debe ser una dirección IPv6 válida.",
    "json"                      => "El campo de :attribute debe ser una cadena JSON válida.",
    "lt"                        => array(
        "numeric" => "El campo de :attribute debe ser más pequeño que :value.",
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
    "not_regex"                 => "El formato del campo de :attribute es inválido..",
    "present"                   => "El campo de :attribute debe estar presente.",
    "required_unless"           => "El campo de :attribute es obligatorio a no ser que :other esté en :values.",
    "string"                    => "El campo de :attribute debe ser una cadena.",
    "timezone"                  => "El campo de :attribute debe ser una zona válida.",
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
