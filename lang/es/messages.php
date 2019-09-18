<?php

return array(

    "deleted"               => "¡Eliminado!",
    "success"               => "Éxito",
    "error"                 => "Error",
    "in_progress"           => "En progreso",

    "save_order"            => "Intentando guardar el orden actualizado de los items",

    "show_all_results"      => "Mostrar todos los resultados &raquo;",

    "are_you_sure"          => "¿Estás seguro/a?",
    "yes_im_sure"           => "Sí, estoy seguro/a",

    "success_created"       => "¡Éxito al crear nuevo :item!",
    "error_created"         => "Error al intentar crear nuevo :item.",

    "success_deleted"       => "¡Éxito al eliminar el :item!",
    "error_deleted"         => "Error al intentar eliminar el :item.",

    "success_updated"       => "¡Éxito al actualizar el :item!",
    "error_updated"         => "Error al intentar actualizar el :item.",

    "error_notfound"        => "El :item con ese ID no se ha podido encontrar.",
    "error_notfound_name"   => "El :item con ese nombre no se ha podido encontrar.",
    "report_notfound"       => "El informe con esa categoría y nombre no se ha podido encontrar.",

    "success_ordering"      => "¡Orden actualizado con éxito!",
    "error_ordering"        => "Error al intentar actualizar el orden.",

    "error_login"           => "Error al intentar iniciar sesión.",
    "success_logout"        => "Sesión cerrada con éxito.",

    "please_correct"        => "Por favor, corrige los siguientes errores e inténtalo de nuevo.",

    "success_settings"      => "¡Ajustes actualizados con éxito!",
    "error_settings"        => "Error al intentar actualizar los ajustes.",

    "success_action"        => "¡Acción llevada a cabo con éxito!",
    "error_action"          => "Error al llevar a cabo la acción.",

    "success_sending"       => "Éxito al enviar el :item!",
    "error_sending"         => "Error al intentar enviar el :item.",

    "error_embed_image"     => "Error al intentar subir la imagen.",

    "unauthorised"          => "Sin autorización",
    "not_authorised"        => "No estás autorizado para completar esta acción.",
    "not_permitted"         => "No tienes permiso para ver esta página. Si crees que esto es un error, por favor, habla con tu administrador de la aplicación.",

    "page_not_found"        => "Página no encontrada",
    "cant_find_page"        => "No podemos encontrar la página que estás buscando.",

    "please_report"         => "Por favor, si esto ha sido inesperado, repórtalo a un administrador.",

    "return_to"             => "Volver a :page.",

    "session_expired"       => "Tu sesión ha expirado. Por favor, vuelve a iniciar sesión.",
    "session_refresh"       => "Tu sesión ha expirado. Por favor, actualiza la página e inténtalo de nuevo.",

    "general_error"         => "Ha ocurrido un error. Por favor, inténtalo de nuevo.",

    "no_results"            => "Sin resultados.",

    "assign_incomplete"     => "La acción no se ha podido completar del todo. :names no se han podido asignar a algunos tickets.",

    "maintenance_mode"      => "El modo de mantenimiento está activo. Los usuarios no pueden acceder al help desk. Por favor, recuerda desactivar el modo de mantenimiento cuando finalice.",

    "invalid_captcha"       => "El código captcha es inválido o incorrecto. Por favor, inténtalo de nuevo.",
    "blocked_as_spam"       => "Tu petición se ha identificado como spam. Por favor, ponte en contacto con un administrador si consideras que ha sido un error.",
    "account_exists"        => "Ya existe una cuenta activa con esta dirección de correo. Por favor, inicia sesión o utiliza la opción de haber olvidado la contraseña si no puedes recordarla.",
    "error_loading_comments" => "Ha habido un problema al cargar los comentarios.",

    "invalid_auth"          => "Credenciales de autenticación inválidos.",

    "forbidden"             => "Prohibido",

    "not_logged_exception"  => "<strong>¡Ups! Algo no ha ido bien.</strong><br />Por favor, notifícaselo al administrador del sistema si el error persiste.",

    "too_many_ticket_reqs"  => "Demasiadas solicitudes de tickets hechas por :email. El límite son :max en :decay minutos.",

    "not_operator"          => "Algo no ha ido bien. El operador seleccionado no es válido, por favor, asegúrate de que pertenece a un grupo de operadores y de que el grupo tiene un papel asociado.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>¡Ups! Algo no ha ido bien.</strong><br />Se ha producido un error al cargar los datos de la tabla. Por favor, notifícaselo al administrador del sistema si el error persiste.",

    "missing_extension"     => "Extensión ausente",
    "php_ldap_missing"      => "Se requiere la extensión php-ldap para usar la autenticación LDAP. Por favor, habilítala y actualiza la página.",
    "php_imap_missing"      => "Se requiere la extensión php-imap para utilizar Email Download. Si deseas utilizar Email Download, por favor, habilita la extensión y actualiza la página.",

    /*
     * 2.0.3
     */
    "only_ssl_connections"  => "Solo se permiten conexiones SSL. Deberías actualizar tu petición a una conexión segura.",
    "queued_emails"         => "¡Éxito! - Los correos empezarán a ponerse en cola y se enviarán brevemente.",
    "error_loading_message" => "Se ha producido un error al cargar el mensaje. Por favor, inténtalo de nuevo.",
    "please_refresh"        => "Por favor, actualiza la página.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Servicio no disponible en este momento.</strong><br />Imposible conectarse a la base de datos.",
    "category_required"     => "El artículo tiene que pertenecer a una o más categorías.",
    "warning"               => "Advertencia",
    "note"                  => "Note",
    "brand_invalid_dept"    => "La acción no se ha podido completar del todo. El departamento no ha podido actualizar algunos tickets debido a su marca.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Error al subir el archivo adjunto \":filename\", razón: \":reason\"",
    "upload_max_size"       => "El archivo debe ser más pequeño que :size",
    "upload_wrong_type"     => "No se permite ese tipo de archivo",

    /*
     * 2.3.0
     */
    "delete_record"         => "Eliminar :record?",
    "cannot_be_undone"      => "Esta acción no se puede deshacer.",
    "warn_delete"           => "Esto eliminará permanentemente el <strong>:name</strong> :record del sistema.",
    "delete_confirm"        => "Sí, eliminar :record",
    "keep_record"           => "No, mantener :record",
    "delete_relations"      => "Al eliminar el <strong>:name</strong> :record también se eliminará permanentemente toda esta información relacionada:",
    "please_check"          => "Debes marcar todas las casillas arriba para confirmar que comprendes el resultado de esta acción irreversible.",
    "failed_attachments"    => "Error al adjuntar algunos archivos.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Éxito - el correo se ha enviado.",
    "task_already_running"  => "Scheduled task is running automatically currently, please try again shortly.",
    "linked_account"        => "La cuenta social se ha asociado con tu cuenta con total éxito.",
    "already_linked"        => "La cuenta social ya está asociada con otra cuenta. Por favor, inicia sesión con la otra cuenta y desasóciala.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "¿Esto está correcto?",
    "no_revert"             => "¡No! Revertir",
    "attachment_not_found"  => "No se ha podido encontrar el archivo adjunto.",

);
