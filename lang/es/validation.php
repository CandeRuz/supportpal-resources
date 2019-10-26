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
    "active_url"                => "El campo de :attribute no es una URL válida.",
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
        "array"   => "El campo de :attribute debe tener entre :min y :max elementos.",
    ),
    "boolean"                   => "El campo de :attribute debe ser verdadero o falso.",
    "confirmed"                 => "La confirmación de la :attribute no se corresponde.",
    "date"                      => "El campo de :attribute no es una fecha válida.",
    "date_format"               => "El campo de :attribute no se corresponde con el formato :format.",
    "different"                 => "El campo de :attribute y de :other tienen que ser diferentes.",
    "digits"                    => "El campo de :attribute debe tener :digits dígitos.",
    "digits_between"            => "El campo de :attribute debe tener entre :min y :max dígitos.",
    "email"                     => "El campo de :attribute debe ser una dirección de correo electrónico válida.",
    "exists"                    => "El/la :attribute seleccionado/a es inválido/a.",
    "image"                     => "EL campo de :attribute debe ser una imagen.",
    "in"                        => "El/la :attribute seleccionado/a es inválido/a.",
    "integer"                   => "El campo de :attribute debe ser un entero.",
    "ip"                        => "El campo de :attribute debe ser una dirección IP válida.",
    "max"                       => array(
        "numeric" => "El campo de :attribute no debe ser más grande que :max.",
        "file"    => "El campo de :attribute no debe tener más de :max kilobytes.",
        "string"  => "El campo de :attribute no debe tener más de :max caracteres.",
        "array"   => "El campo de :attribute no debe tener más de :max elementos.",
    ),
    "mimes"                     => "El campo de :attribute debe ser un archivo de tipo: :values.",
    "min"                       => array(
        "numeric" => "El campo de :attribute debe tener al menos :min.",
        "file"    => "El campo de :attribute debe tener al menos :min kilobytes.",
        "string"  => "El campo de :attribute debe tener al menos :min caracteres.",
        "array"   => "El campo de :attribute debe tener al menos :min elementos.",
    ),
    "not_in"                    => "El/la :attribute seleccionado/a es inválido/a.",
    "numeric"                   => "El campo de :attribute debe ser un número.",
    "regex"                     => "El formato del campo de :attribute es inválido.",
    "required"                  => "El campo de :attribute es obligatorio.",
    "required_if"               => "El campo de :attribute es obligatorio cuando :other es :value.",
    "required_with"             => "El campo de :attribute es obligatorio cuando :values está presente.",
    "required_with_all"         => "El campo de :attribute es obligatorio cuando :values está presente.",
    "required_without"          => "El campo de :attribute es obligatorio cuando :values no está presente.",
    "required_without_all"      => "El campo de :attribute es obligatorio cuando ninguno de :values están presentes.",
    "same"                      => "El campo de :attribute y de :other deben corresponderse.",
    "size"                      => array(
        "numeric" => "El campo de :attribute debe ser :size.",
        "file"    => "El campo de :attribute debe tener :size kilobytes.",
        "string"  => "El campo de :attribute debe tener :size caracteres.",
        "array"   => "El campo de :attribute debe contener :size elementos.",
    ),
    "unique"                    => "The :attribute has already been taken.",
    "url"                       => "The :attribute format is invalid.",
    "timezone"                  => "The :attribute debe ser una zona válida.",
    "template_exists"           => "The selected :attribute is invalid.",
    "is_valid_captcha"          => "El código captcha introducido es inválido o incorrecto. Por favor, inténtalo de nuevo.",
    "user_password_length"      => "La contraseña debe ser igual o más larga que :user_password_length caracteres.",
    "operator_password_length"  => "La contraseña debe ser igual o más larga que :operator_password_length caracteres.",
    "json"                      => "El campo de :attribute debe ser un JSON válido.",
    "user_password_strength"    => "El campo de :attribute debe contener: :user_password_strength.",
    "operator_password_strength" => "El campo de :attribute debe contener: :operator_password_strength.",
    "twig_lint"                 => "El campo de :attribute debe ser sintaxis twig válida. Por favor, comprueba http://twig.sensiolabs.org/doc/templates.html",

    /*
     * 2.1.0
     */
    "in_array"                  => "El campo de :attribute no existe en :other.",
    "logo"                      => "El logo debe apuntar a un archivo de imagen válida (una URL directa o una ruta de acceso al directorio base relativa al archivo).",

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
    "customfield_not_cyclic"    => "El campo no puede depender de uno de sus hijos.",
    "distinct"                  => "El campo de :attribute tiene un valor duplicado.",
    
    /*
     * 2.3.1
     */
    "is_slug"                   => "El campo de slug solo puede contener caracteres alfanuméricos. can only contain alphanumeric characters, please percent encode any special characters.",
    "article_type_slug_unique"  => "El slug ya se está usando.",
    "article_tag_slug_unique"   => "El slug ya se está usando.",
    "article_category_slug_unique" => "El slug ya se está usando.",
    "article_slug_unique"       => "El slug ya se está usando.",
    "department_exists"         => "El departamento seleccionado es inválido.",
    "captcha_required"          => "Se requiere el captcha.",
    "ticket_number_format"      => "El formato del número del ticket es inválido.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "El campo de :attribute debe ser una fecha posterior o igual a :date.",
    "before_or_equal"           => "El campo de :attribute debe ser una fecha anterior o igual a :date.",
    "dimensions"                => "El campo de :attribute tiene dimensiones de imagen inválidas.",
    "distinct"                  => 'El campo de :attribute tiene un valor duplicado.',
    "file"                      => "El campo de :attribute debe ser un archivo.",
    "filled"                    => "El campo de :attribute debe tener un valor.",
    "gt"                        => array(
        "numeric" => "El campo de :attribute debe ser mayor que :value.",
        "file"    => "El campo de :attribute debe tener más de :value kilobytes.",
        "string"  => "El campo de :attribute debe tener más de :value caracteres.",
        "array"   => "El campo de :attribute debe tener más de :value elementos.",
    ),
    "gte"                       => array(
        "numeric" => "El campo de :attribute debe ser mayor o igual a :value.",
        "file"    => "El campo de :attribute debe tener :value kilobytes o más.",
        "string"  => "El campo de :attribute debe tener :value caracteres o más.",
        "array"   => "El campo de :attribute debe tener :value elementos o más.",
    ),
    "in_array"                  => "El campo de :attribute no existe en :other.",
    "ipv4"                      => "El campo de :attribute debe ser una dirección IPv4 válida.",
    "ipv6"                      => "El campo de :attribute debe ser una dirección IPv6 válida.",
    "json"                      => "El campo de :attribute debe ser una cadena JSON válida.",
    "lt"                        => array(
        "numeric" => "El campo de :attribute debe ser más pequeño que :value.",
        "file"    => "El campo de :attribute debe tener menos de :value kilobytes.",
        "string"  => "El campo de :attribute debe tener menos de :value caracteres.",
        "array"   => "El campo de :attribute debe tener menos de :value elementos.",
    ),
    "lte"                       => array(
        "numeric" => "El campo de :attribute debe ser menor o igual que :value.",
        "file"    => "El campo de :attribute debe tener :value kilobytes o menos.",
        "string"  => "El campo de :attribute debe tener:value characters o menos.",
        "array"   => "El campo de :attribute no debe tener más de :value elementos.",
    ),
    "mimetypes"                 => "The :attribute must be a file of type: :values.",
    "not_regex"                 => "El formato del campo de :attribute es inválido..",
    "present"                   => "El campo de :attribute debe estar presente.",
    "required_unless"           => "El campo de :attribute es obligatorio a no ser que :other esté en :values.",
    "string"                    => "El campo de :attribute debe ser una cadena.",
    "timezone"                  => "El campo de :attribute debe ser una zona válida.",
    "uploaded"                  => "Hubo un error al intentar subir :attribute.",

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
            "exists" => "La función seleccionada es inválida.",
        ),
        "category.*.type" => array(
            "required" => "Se deben seleccionar uno o más tipos de auto-servicio.",
        ),
        "category.*.categories" => array(
            'required' => "Se requieren una o más categorías cuando se ha seleccionado un tipo de auto-servicio.",
            "exists"   => "Una o más de las categorías seleccionadas son inválidas.",
        ),
        "brand.*" => array(
            "exists" => "La marca seleccionada es inválida.",
        ),
        "signature.*.*.contents" => array(
            "twig_lint" => "Cada firma debe ser sintaxis twig válida. Por favor, comprueba http://twig.sensiolabs.org/doc/templates.html"
        ),
        "template.*.*.subject" => array(
            "required" => "El campo del asunto es obligatorio para cada correo.",
            "min" => "Cada campo de asunto debe tener más de 1 caracter.",
            "max" => "Cada campo de asunto debe tener menos de 255 caracteres.",
        ),
        "template.*.*.contents" => array(
            "required" => "El campo de contenidos es neccesario para cada correo.",
            "min" => "Cada campo de contenidos debe tener más de 1 caracter.",
            "twig_lint" => "Cada campo de contenidos debe ser una sintaxis twig válida. Por favor, comprueba http://twig.sensiolabs.org/doc/templates.html"
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
