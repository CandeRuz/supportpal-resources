<?php

return array(

    "customfield"               => "Campo personalizado|Campos personalizados",

    // Options
    "boolean"                   => "Boolean",
    "checkbox"                  => "Checkbox",
    "checklist"                 => "Checklist",
    "date"                      => "Fecha",
    "multiple"                  => "Múltiples opciones",
    "options"                   => "Opciones",
    "password"                  => "Contraseña",
    "radio"                     => "Radio Buttons",
    "rating"                    => "Rating (de 1 a 5)",
    "text"                      => "Text",
    "textarea"                  => "Textarea",

    "public"                    => "Público",
    "public_desc"               => "si el campo personalizado se muestra públicamente en el frontend o es solo visible para el personal.",
    "encrypted"                 => "Encriptado",
    "purge_desc"                => "Si el valor del campo pesronalizado debería ser automátiacmente eliminado cuando se resuelve el ticket.",
    "locked"                    => "Bloqueado",
    "locked_desc"               => "Si el valor del campo personalizado no puede cambiar una vez establecido por el usuario.",
    "department_desc"           => "Selecciona en qué departamentos está disponible el campo.",

    /*
     * 2.0.2
     */
    "please_select"             => "Por favor, selecciona...",

    /*
     * 2.0.3
     */
    "description_desc"          => "El texto de ayuda que aparece debajo del campo personalizado y puede, opcionalmente, dejarse en blanco.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Selecciona en qué marcas está disponible el campo.",
    
    /*
     * 2.3.0
     */
    "option_warning"            => "Deleting existing options will clear any saved fields that currently have those values selected.",
    "regex_basic_desc"          => "Optionally specify a regular expression to validate the custom field value.",
    "regex_desc"                => "The regex is case-sensitive, there's no need to specify regex delimiters, and use of forward slashes will be automatically escaped. Example: ^[a-z0-9_-]{6,18}$ would enforce that the value is 6-18 characters long and contains only a mix of alphanumeric characters, underscores and dashes.",
    "regex_error_message"       => "Validation Error Message",
    "regex_error_message_desc"  => "Optionally specify a custom error message that will be shown if the value does not match the regex validation, otherwise a generic message will be shown. The message will be shown exactly as entered, therefore we recommend to include the custom field name to make the error message more obvious.",
    "custom_field_values"       => "Custom Field Values",
    "depends_on"                => "Depends On",
    "depends_on_desc"           => "If selected, this field will only be shown to the user when the specified field value is selected. The brand and department visibility will be automatically inherited from the field it depends on.",
    "select_option"             => "Select an option...",
    "purge"                     => "Purge",
    "encrypted_desc"            => "If the custom field value is sensitive and should be saved in the database encrypted. This cannot be changed once the custom field has been created.",

    /*
     * 2.3.1
     */
    "required_desc"             => "If the custom field must be filled out. For the checkbox, checklist or multiple options types, it will require the user to select at least one option.",

);
