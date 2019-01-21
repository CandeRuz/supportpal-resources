<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "slogan"                    => "Atención al cliente, fácil y eficaz.",
    "operator_panel"            => "Panel del operador",
    "carefully_crafted"         => "Cuidadosamente elaborado por",
    "welcome"                   => "Bienvenido a SupportPal",
    "welcome_desc"              => "Has tomado la mejor decisión. Pulsa comenzar para disfrutar de un recorrido a través de las prestaciones y características de nuestro producto.",

    // Dashboard
    "search_placeholder"        => "Busca nuestra asistencia técnica...",
    "submit_ticket"             => "Enviar ticket",
    "submit_ticket_desc"        => "Utiliza este formulario para enviar un ticket a nuestra plantilla de operadores especializados.",
    "track_ticket"              => "Comprobar el estado del ticket",
    "track_ticket_desc"         => "¿No estás registrado? Utiliza tu dirección de correo electrónico y el número del ticket para comprobar su estado",
    "my_tickets"                => "Mis tickets",
    "my_tickets_desc"           => "Comprueba tus tickets. Aquí puedes encontrar tickets tanto activos como previamente enviados.",
    "no_modules"                => "No hay secciones habilitadas",
    "search_results"            => "Resultados de la búsqueda",
    "found_results"             => "Encontrado(s) :total resultado(s) para el término de búsqueda",

    // Maintenance
    "maintenance"               => "Ahora mismo estamos trabajando en el mantenimiento de la página",
    "maintenance_desc"          => "Nuestro servicio de asistencia técnica no se encuentra disponible en este momento debido a que estamos realizando tareas de mantenimiento. Le agradecemos su paciencia mientras las llevamos a cabo. ¡Volveremos enseguida!.",
    "maintenance_active"        => "El modo de mantenimiento se encuentra activo",

    // About
    "license_status"            => "Estado de la licencia",
    "license_code"              => "Código de la licencia",
    "change_license"            => "Cambiar licencia",
    "license_info"              => "Información sobre la licencia",
    "license_owner"             => "Propietario de la licencia",
    "license_created"           => "Licencia creada",
    "license_type"              => "Tipo de licencia",
    "no_branding"               => "No mostrar marca",
    "branding"                  => "Mostrar marca",
    "license_expires"           => "La licencia expira",
    "license_valid_ip"          => "IP(s) válidos de la licencia",
    "support_status"            => "Estado de la asistencia",
    "support_expires"           => "La asistencia expira",
    "version_info"              => "Información sobre esta versión",
    "installed_version"         => "Versión instalada",
    "available_version"         => "Versión disponible",
    "monthly_product"           => "Tu fecha de expiración se ajustará automáticamente al mes una vez que se hayan pagado las facturas.",

    // API Tokens
    "api_token"                 => "API Token|API Tokens",
    "token"                     => "Token",
    "regenerate_token"          => "Regenerar token",
    "access_level"              => "Acceso al nivel",
    "read_write"                => "Lectura y escritura",
    "read_only"                 => "Solo lectura",

    // Spam Rules & Filtering
    "spam_rule"                 => "Regla de spam|Reglas de spam",
    "containing_text"           => "Que contenga el texto",
    "containing_text_desc"      => "Por favor, introduzca una palabra o frase específica. En estas no se hará distinción entre mayúsculas y minúsculas. <br /> También pueden beneficiarse de <a href='http://www.regular-expressions.info/'>expresiones regulares</a>, un ejemplo de esto sería: 's.{1,}p.{1,}a.{1,}m'. No hace falta tener en cuenta los delimitadores.",
    "filter_new_message"        => "Nuevo mensaje del ticket (del usuario)",
    "filter_new_comment"        => "Nuevo comentario de auto-servicio (del usuario)",
    "filter_user_login"         => "Acceso del usuario",
    "filter_operator_login"     => "Acceso del operador",
    "filter_api_access"         => "Acceso API",
    "content"                   => "Contenido",
    "sender"                    => "Remitente",
    "content_sender"            => "Contenido y remitente",

    // Company
    "company"                   => "Compañía|Compañías",
    "company_name"              => "Nombre de la compañía",

    // Email
    "default_email_addr"        => "Dirección de correo por defecto",
    "default_email_addr_desc"   => "El correo electrónico que se utilizará en el campo del remitente en la mayoría de los correos enviados por el sistema.",
    "include_operator_name"     => "Incluir nombre del operador",
    "include_operator_name_desc" => "Incluir el nombre de los operadores en el campo 'De' del correo para correos de respuesta al ticket. Por ejemplo: De: Joe Bloggs (Nombre de la compañía + nombre del departamento)",
    "include_dept_name"         => "Incluir nombre del departamento",
    "include_dept_name_desc"    => "Incluir el nombre del departamento en el campo 'De' de cualquier correo relacionado con el ticket. Tenga en cuenta que esto normalmente creará un nuevo hilo de correos si un determinado ticket cambia de departamento." ,
    "global_email_header"       => "Cabecera del correo electrónico",
    "global_email_header_desc"  => "Añadir una cabecera a todos los correos electrónicos enviados por el sistema. Se acepta HTML.",
    "global_email_footer"       => "Pie de página",
    "global_email_footer_desc"  => "Añadir un pie de página a todos los correos electrónicos enviados por le sistema. Se acepta HTML.",
    "email_template"            => "Plantilla de correo|Plantillas de correo",
    "email_log"                 => "Registro de correos",
    "email_queue"               => "Cola de correos",
    "email_queue_desc"          => "Debajo se encuentran los correos en cola para ser enviados pronto por el cronograma.",
    "email_method"              => "Método de correo electrónico",
    "php_mail_function"         => "PHP mail() función",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "Host SMTP",
    "smtp_port"                 => "Puerto SMTP",
    "smtp_encryption"           => "Cifrado SMTP",
    "smtp_requires_auth"        => "Requiere autenticación",
    "smtp_username"             => "Nombre de usuario SMTP",
    "smtp_password"             => "Contraseña SMTP",
    "ssl"                       => "SSL",
    "tls"                       => "TLS",
    "validate_smtp"             => "Validar SMTP",
    "email_content"             => "Contenido del correo",
    "email_content_desc"        => "Insertar un asunto por defecto y contenido del correo para esta plantilla. También puedes escribir la plantilla en otras lenguas. Si una plantilla no está establecida en otra lengua, se utilizará la información por defecto.",
    "outgoing"                  => "Enviados",
    "incoming"                  => "Recibidos",
    "incoming_spam"             => "Recibidos (Rechazados - Spam)",
    "incoming_throttled"        => "Recibidos (Rechazados - Throttled)",
    "email_subject"             => "Asunto del correo",
    "twig_html_warning"         => "No se permite Twig dentro de etiquetas o atributos HTML y será automáticamente eliminado al guardar.",

    // Modules
    "modules"                   => "Sección|Secciones",
    "modules_desc"              => "Debajo se encuentra una lista con todas las secciones disponibles. Haz click en el icono de editar para actualizar los ajustes de esa sección.",
    "module_disable"            => "Las secciones desactivadas se elimarán del frontend y la interfaz del operador.",

    // Scheduled tasks
    "scheduled_task"            => "Tarea programada|Tareas programadas",
    "interval_desc"             => "Establecer la frecuencia con la que se ejecuta esta tarea, por ejemplo, estableciendo 5 minutos significará que  la tarea se ejecutará cada 5 minutos si el cronograma está activo y funcionando.",
    "cron_settings"             => "Ajustes del cronograma",
    "cron_makesure"             => "Por favor, crea un Cron Job con la siguiente entrada: ",
    "cron_running"              => "Ejecutándose",
    "cron_not_running"          => "No ejecutándose",
    "task_ran"                  => "Tarea programada ejecutada con éxito manualmente.",
    "task_failed"               => "Error al intentar ejecutar la tarea programada manualmente.",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "installed_plugins"         => "Plugins instalados",
    "visit_plugin"              => "Visitar Plugin Site",
    "uninstall_plugin_warning"  => "Al desinstalar el plugin se eliminarán todos los archivos y la información asociada, por lo que en su lugar recomendamos simplemente desactivar el plugin.",

    // Messages
    "last_activity"             => "Actividad reciente",
    "send_to"                   => "Enviar a",
    "inbox"                     => "Buzón de entrada",
    "compose"                   => "Redactar",

    // Utilities
    "utilities"                 => "Utilidades",

    // System Cleanup
    "system_cleanup"            => "Limpieza del sistema",
    "system_cleanup_desc"       => "Utiliza las opciones disponibles para eliminar información que ya no sirva o sea necesaria.",
    "files"                     => "Archivos",
    "files_desc"                => "Los siguientes elementos están almacenados como archivos en el sistema de archivos.",
    "logs"                      => "Registros",
    "logs_desc"                 => "Los siguientes elementos están registrados en la base de datos.",
    "empty"                     => "Vacío",
    "prune"                     => "Eliminar",
    "total_records"             => "Total de registros",
    "system_cache"              => "Caché del sistema",
    "system_cache_desc"         => "Utilizada para almacenar información del sistema que no cambia con regularidad para acelerar la aplicación.",
    "template_cache"            => "Plantilla de Caché",
    "template_cache_desc"       => "Las versiones precompiladas de las vistas de plantillas están almacenadas para mejorar los tiempos de carga.",
    "attachments_desc"          => "Los archivos adjuntos de los tickets están almacenados en el sistema de archivos pero pueden ocupar espacio, puedes eliminar archivos adjuntos antes de una fecha determinada.",
    "system_activity_log_desc"  => "Almacena toda actvidad de usuarios, operadores y del propio sistema, puedes eliminar registros antes de una fecha determinada.",
    "email_log_desc"            => "Almacena todos los correos recibidos y enviados, puedes eliminar registros antes de una fecha determinada.",
    "operator_login_log_desc"   => "Almacena cada vez que un operador inicia sesión con su IP, puedes eliminar registros antes de una fecha determinada.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Mostrar Captcha",

    // Widgety
    "dashboard"                 => "Escritorio",
    "add_remove_widget"         => "Añadir / Eliminar Widgets",
    "enable_tour"               => "Habilitar el recorrido del producto",

    // Product Tour
    "dashboard_desc"            => "Tu escritorio personal. ¡Los widgets se pueden eliminar, minimizar y mover donde quieras!",
    "private_messages"          => "Mensajes privados",
    "messages_desc"             => "Los mensajes privados son muy útiles para conversaciones privadas con otros operadores de asistencia técnica.",
    "configure"                 => "Configura tu panel de asistencia técnica.",
    "configure_desc"            => "SupportPal ofrece una serie de ajustes que te permiten configurar el help desk de acuerdo con tus preferencias personales.",
    "company_name_desc"         => "El nombre de tu compañía se usa para toda la correspondencia con los usuarios.",
    "default_email"             => "Dirección de correo electrónico por defecto",
    "default_email_desc"        => "La dirección de correo electrónico por defecto para utilizar para toda la correspondencia saliente para los usuarios.",
    "dept_settings_desc"        => "Nos hemos dado cuenta de que los departamentos dentro de tu organización funcionan de manera diferente. Los ajustes de departamento te permiten cancelar los ajustes globales.",
    "department_desc"           => "Los departamentos son exactamente iguales que los de tu organización. Son útiles para asegurar que las consultas de los clientes se dirigen a el personal adecuado rápidamente.",
    "department_email"          => "Direcciones de correo electrónico de departamento",
    "dept_email_desc"           => "Múltiples direcciones de correo se pueden asignar a un departamento determinado. Los correos electrónicos se descargarán de cada dirección y se importarán al panel de asistencia técnica.",
    "dept_tmpl"                 => "Plantillas de correo de departamento",
    "dept_tmpl_desc"            => "A veces puede que quieras cambiar o deshabilitar por completo plantillas de correos de departamento. Puedes definir plantillas de correos de departamento específicas y habilitarlas aquí.",
    "schedule_task_desc"        => "Las tareas programadas se usan para automatizar varios procesos dentro de SupportPal, incluyendo la recopilación de los tickets basados en correos.",
    "schedule_task_2"           => "Las tareas programadas necesitan que se cree un Cron Job para funcionar. El intervalo para cada tarea llevada a cabo por el cron job se puede ajustar a través del formulario para editar.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Crea un Cron Job similar al ejemplo mostrado abajo de tu servidor para que las tareas programadas se ejecuten automáticamente.",
    "ticket_channel_desc"       => "Los canales de ticket son métodos de creación de ticket. Estos se pueden extender fácilmente para inlcuir tus propios canales, por ejemplo tickets abiertos a través de Instagram.",
    "ticket_channel_2"          => "Nosotros ofrecemos una serie de canales por defecto. Puedes activar y configurar los canales de Facebook y Twitter para recopilar tickets generados a través de las redes sociales.",
    "user_desc"                 => "Los usuarios que interactúan con tu sistema se muestran aquí. Puedes añadir, editar y eliminar usuarios como desees.",
    "organisation_desc"         => "Los usuarios se pueden asignar a organizaciones, permitiéndoles acceder a los tickets abiertos por otros usuarios dentro de su misma organización.",
    "operator_desc"             => "Otros empleados pueden ser añadidos como operadores aquí, además de administrar a qué departamentos están asignados.",
    "ticket_desc"               => "La cuadrícula de los tickets contiene una colección de todos los tickets que son relevantes para ti.",
    "ticket_desc2"              => "La cuadrícula de los tickets se puede ordenar y filtrar y también puedes ajustar la disposición de las columnas como tú prefieras.",
    "ticket_toolbar"            => "Barra de herramientas",
    "ticket_desc3"              => "La mayor parte de las acciones sobre los tickets se pueden llevar a cabo usando la barra de herramientas de los tickets.",
    "tour_complete"             => "¡Recorrido completado!",
    "tour_complete_desc"        => "Gracias por usar SupportPal.<br /><br /> Ahora te recomendamos que sigas la guía de inicio mostrada abajo para configurar tu help desk.",

    // IP Ban
    "ip_ban_time_desc"          => "Si el baneo es permanente o temporal.",
    "expiry"                    => "Expiración",
    "expired"                   => "Expirado",
    "expiry_time"               => "Tiempo de expiración",
    "expiry_time_desc"          => "El período de tiempo en el que expirará el baneo. Si no se ha establecido una fecha anteriormente, se establecerán automáticamente 24 horas desde este momento.",
    "permanent"                 => "Permanente",

    // Languages
    "no_enabled_languages"      => "Error al intentar actualizar el/la :item. Siempre debe haber una lengua habilitada como mínimo.",

    // General Settings
    "locale"                    => "Localización",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Carpeta del administrador",
    "admin_folder_desc"         => "Establece el nombre de la carpeta para el panel del operador. Por motivos de seguridad, se recomienda cambiarle el nombre por defecto \"admin\".",
    "enable_ssl"                => "Habilitar SSL",
    "frontend_template"         => "Plantilla de Frontend",
    "operator_template"         => "Plantilla del operador",
    "maintenance_mode"          => "Modo de mantenimiento",
    "maintenance_mode_desc"     => "Inhabilita la función de asistencia técnica pública y muestra un aviso de mantenimiento. Edita resources/templates/frontend/[template]/core/maintenance.twig para cambiar el mensaje que se muestra a los usuarios.",
    "default_user_country"      => "País del usuario por defecto",
    "default_user_country_desc" => "El país que se seleccionará por defecto cuando se registren los usuarios.",
    "system_timezone"           => "Zona horaria del sistema",
    "system_timezone_desc"      => "La zona horaria por defecto se aplica en todo el sistema. Los operadores pueden cambiar su zona horaria en sus ajustes personales.",
    "date_format"               => "Formato de fecha",
    "date_format_desc"          => "El formato de fecha que se usa globalmente.",
    "time_format"               => "Formato de hora",
    "time_format_desc"          => "El formato de hora que se usa globalmente.",
    "simpleauth_key"            => "Clave de SimpleAuth",
    "simpleauth_key_desc"       => "la clave para nuestra opción de inicio de sesión, mínimo 16 caracteres.",
    "simpleauth_operators"      => "Permitir para operadores",
    "frontend_logo"             => "Logo del Frontend",
    "base_url"                  => "URL del sistema",
    "base_url_desc"             => "Introduce la dirección completa de la web de tu instalación, utilizada para generar las URLs enviadas a los usuarios.",
    "debug"                     => "Depurar",
    "debug_mode"                => "Modo de depuración",
    "debug_mode_desc"           => "Habilita el modo de depuración para mostrar errores, con un único uso para corregir errores o instruído por asistencia. Si no, los errores se almacenan en los registros en /storage/logs.",
    "pretty_urls"               => "URLs amigables",
    "pretty_urls_desc"          => "Enabling will remove index.php from URLs, only enable if you are able to access the operator panel without index.php. Disable if you do not have mod_rewrite installed, .htaccess files are not allowed or haven't converted the Apache .htaccess rewrite rules to work with your alternative web server.",

    /*
     * 2.0.1
     */
    "incoming_rejected"         => "Recibidos (Rechazados)",

    /*
     * 2.0.2
     */
    "cron_makesure"             => "Para ayuda al registrar el Cron Job, vea por favor <a target='_blank' href='https://docs.supportpal.com/current/New+Installation#CronJob'>Cron Job Help</a>.",
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Al habilitar esto, se obligará a todo el frontend y al área del operador a usar conexiones seguras, lo cual es un ajuste que recomendamos.Por favor, asegúrate de que HTTPS funciona correctamente en tu servidor antes de activarlo.",
    "unexpected_template_error" => "An unexpected error occurred while syntax checking the template. Please try again.",
    "empty_template_preview"    => "Por favor, utiliza una plantilla válida para poder usar la función de previsualización.",
    "no_department_address"     => "Error al intentar encontrar una dirección de departamento en la lista de destinatarios.",
    "email_loop_detected"       => "Bucle detectado - correo enviado desde una dirección de departamento.",
    "email_ticket_locked"       => "Ticket bloqueado. Se le ha pedido al usuario que abra un nuevo ticket a través del correo electrónico.",
    "email_no_body"             => "Error al identificar el cuerpo del mensaje del correo electrónico.",
    "email_runtime_error"       => "Se ha producido un error de ejecución al crear el ticket/la respuesta.",
    "email_reply_disabled"      => "Las respuestas al correo del usuario han sido desactivadas para este departamento.",
    "email_throttled"           => "Demasiados correos entrantes del usuario. El límite es :max_requests correos cada :decay_time minutos.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Edita los ajustes que se aplican a todo SupportPal. Si deseas editar ajustes para una sección específica, por ejemplo Tickets, abre la sección en la barra lateral para ver ajustes disponibles para ese sección. Puedes encontrar los ajustes relacionados con tu(s) marca(s) al hacer click en Marcas en la barra lateral.",
    "brand"                     => "Marca|Marcas",
    "brand_desc"                => "Una marca es tu identidad de cara al cliente con Supportpal, permitiendo varios canales de comunicación. Varias marcas pueden funcionar a la perfección a través de un único y unificado panel de operador.",
    "brand_name"                => "Nombre de la marca",
    "default_brand"             => "Marca por defecto",
    "default_brand_desc"        => "Selecciona la marca que se utilizará por defecto cuando los visitantes visiten el frontend y no se pueda encontrar una marca correspondiente.",
    "brand_name_desc"           => "El nombre de la marca visto por end-users.",
    "brand_enabled_desc"        => "Alterna para activar o desactivar la marca. Las marcas desactivadas no se pueden utilizar y no formarán parte de las marcas permitidas en tu licencia. La opción de desactivar se puede utilizar para ocultar una marca temporalmente y/o retener información. Al eliminar una marca se borrará toda la información, incluyendo los usuarios y los tickets relacionados con ella.",
    "inherit_global_setting"    => "Inherit Global Setting",
    "brand_date_format_desc"    => "El formato de fecha utilizado para el frontend de esta marca.",
    "brand_time_format_desc"    => "El formato de hora utilizado para el frontend de esta marca.",
    "brand_timezone"            => "Zona horaria de la marca",
    "brand_timezone_desc"       => "La zona horaria utilizada por defecto en el frontend de esta marca, los usuarios tendrán la opcion de seleccionar su propia zona horaria.",
    "brand_default_lang_desc"   => "La lengua utilizada por defecto en el frontend de esta marca.",
    "brand_lang_toggle_desc"    => "If the language dropdown should show on this brand's frontend.",
    "brand_groups_desc"         => "Los operadores en los grupos seleccionados serán capaces de crear, actualizar y eliminar (dependiendo de los permisos que posean) tickets y otro contenido en esta marca.",
    "select_brand"              => "Selecciona una marca...",
    "add_another_language"      => "Añadir otra lengua...",
    "mass_email_brand_desc"     => "Please select which brand the email will be sent from. It will be used to set the sending from name and address, load the correct email template and in the merge fields. If you send to a user group, only users who belong to the selected brand will be emailed.",
    "brand_limit_exceeded"      => "Your license is only permitted to use :allowed brand(s) simultaneously. To purchase additional brands please visit our client area.",
    "additional_brands"         => "Marcas adicionales",
    "purchase_more"             => "Comprar más",
    "brand_limit_allowed"       => "Your license is currently permitted to use :allowed brand simultaneously.|Your license is currently permitted to use :allowed brands simultaneously.",
    "brand_limit_purchase"      => "If this is incorrect, please <strong>reissue</strong> your license at our <a href='http://www.supportpal.com/manage/' target='_blank'>client area</a> and visit the <a href=':route'>License Information</a> page to synchronise your help desk with our license server.<br />To purchase additional brands, please <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>upgrade your license</a>.",
    "support_expiry"            => "Your support and updates subscription is valid until :date.",
    "support_status_desc"       => "Please <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renew your support subscription</a> in order to get the latest support and updates from SupportPal.",
    "ip_ban"                    => "IP Ban|IP Bans",
    "ip_whitelist"              => "IP Whitelist",
    "whitelisted_ip"            => "Whitelisted IP",
    "frontend_logo_desc"        => "Change the default logo on the frontend interface for this brand. The field can either be a path relative to the base directory (we recommend to store your logo in the resources/assets/ folder) or a direct URL to the image.",
    "license_path"              => "Installation Path",
    "php_info"                  => "Información PHP",
    "log"                       => "Log|Logs",
    "invalid_department_brand"  => "El departamento no está asignado a la marca del ticket.",
    "incoming_rejected"         => "Recibidos (Rechazados)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Log File Manager",
    "file_manager_desc"         => "Below you can download or delete the logs that are stored by the system during operation, they can be used for debugging purposes. The log files are automatically cycled, storing only up to the latest 5 days of entries.",
    "app_logs"                  => "Application Logs",
    "app_logs_desc"             => "All warnings and errors from general usage of the help desk are logged here. You may be asked to provide one or more of these logs when requesting support.",
    "email_logs"                => "Email Logs",
    "email_logs_desc"           => "Details about incoming emails are stored in these files when they are being parsed and imported as tickets.",
    "query_logs"                => "SQL Query Logs",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Responder a",
    "and_number_others"         => "and :number other|and :number others",
    "user_templates"            => "Plantillas del usuario",
    "operator_templates"        => "Plantillas del operador",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Cumulative Attachment Size Limit",
    "attachment_size_desc"      => "The maximum cumulative size of all attachments that are sent in a single email. Available options are K (for Kilobytes) and M (for Megabytes), anything else assumes bytes. Example value: 5M for 5 Megabytes. Set to 0 to not send any attachments by email and require users to download attachments via the help desk.",
    "attachment_limit_reached"  => "Cumulative file limit reached (:size). Please consider sending files via another medium (such as a download URL).",
    "upload_unknown_error"      => "The file \":file\" was not uploaded due to a server-side error.",
    "renew_support"             => "<a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>Renew</a>",
    "translations"              => "Traducciones",
    "no_existing_translations"  => "No existen traducciones",
    "add_translation"           => "Añadir traducción",
    "todo_list"                 => "To Do List",
    "version_check"             => "Version Check",
    "system_overview"           => "System Overview",
    "getting_started"           => "Getting Started",
    "operator_notes"            => "Operator Notes",
    "simpleauth_operators_desc" => "Allow operators to log in and out with SimpleAuth, we recommend to keep this disabled unless you are specifically using it for this purpose.",
    "upgrade_and_reactivate"    => "Upgrade & Reactivate",
    "upgrade_pending"           => "Upgrade Pending",
    "locale_in_uri"             => "Include Locale in URI",
    "locale_in_uri_desc"        => "Disable to remove the locale from the URI, for example: http://support.mycompany.com/en/announcements becomes http://support.mycompany.com/announcements. Can only be disabled when there's one enabled language in the system.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "This is currently set as a default language. Disabling the language will set another enabled language as the default language instead.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Please enable JavaScript in order to use this page.",
    "go_to_dashboard"           => "Go to dashboard",
    "brand_colour_desc"         => "Select a colour for your brand, it will be used for the colour scheme on both the frontend and operator template. Leave blank to use the default colour scheme.",
    "new_brand_preview"         => "For new brands, the preview option will use the default brand data.",
    "frontend_logo_url"         => "Frontend Logo URL",
    "frontend_logo_url_desc"    => "Web page to send the user to after clicking the logo. By default, redirects to the support portal home page.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "The favicon image appears in the address bar and is used to identify your website. For the best results, ensure the icon contains a range of sizes from 32x32px to 310x310px, is square and ICO/PNG format.",
    "operator_icon"             => "Operator Icon",
    "operator_icon_desc"        => "Change the default icon on the operator interface for this brand. The field can either be a path relative to the base directory (we recommend to store your logo in the resources/assets/ folder) or a direct URL to the image. We recommend a white-filled icon that is transparent and scales from 32x32px to 80x80px well.",
    "view_original"             => "Ver original",
    "download_original"         => "Descargar original",
    "consume_all"               => "Optionally enter a department email address  with \"Consume All\" enabled.",
    "reprocess_email"           => "Reprocess Email",
    "reprocess_email_desc"      => "We recommend to review what originally blocked the email and make any necessary changes before attempting to reprocess.",
    "email_blocked_desc"        => "The email failed to send several times, it must now be manually sent.",
    "captcha_type"              => "Captcha Type",
    "captcha_type_desc"         => "Select the Captcha to be used throughout the system. We recommend switching to Google reCAPTCHA, which requires additional configuration.",
    "default_captcha"           => "Default Captcha",
    "recaptcha_site_key"        => "Site Key",
    "recaptcha_secret_key"      => "Secret Key",
    "recaptcha_desc"            => "Please register a new site at <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, select the correct type of reCAPTCHA and ensure to add each brand domain. Copy the site and secret key above.",
    "enter_code"                => "Enter code",
    "export_data"               => "Export Data",
    "export_data_desc"          => "Generate a downloadable export of data belonging to this user.",
    "export_data_select"        => "Please select what data you would like to export.",
    "export_data_scheduled"     => "The export is currently being generated, this may take some time. We will e-mail you when it's available to download.",
    "database"                  => "Database",
    "database_desc"             => "The following items are stored in the database.",
    "prune_users"               => "Inactive user records can be automatically pruned. A user is considered inactive if they have not logged in or have any other activity for a given amount of time.",
    "prune_tickets"             => "Inactive tickets can be automatically pruned. A ticket is considered inactive if it is resolved and has not had any activity for a given amount of time.",
    "prune_organisations"       => "Inactive organisations can be automatically pruned. An organisation is considered inactive if it has no users linked with it and has not had any activity for a given amount of time.",
    "prune_export"              => "User data exports are stored on the file system but may take up room, you can prune export files generated before a certain date.",
    "automatically_prune"       => "Automatically delete",
    "days_after_saved"          => "Records after",
    "days_after_last_activity"  => "Inactive records after",
    "record_permanent_delete"   => "The records will be permanently deleted. This will impact reports.",
    "record_delete_relations"   => "The records will be permanently deleted along with the following related data: :relations. This will impact reports.",
    "manually_prune"            => "Manually delete records created before",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "If you enable this setting when the page doesn't load correctly, you may be locked out of SupportPal!",
    "verify_frontend_loads"     => "Please verify that the frontend loads correctly below.",
    "query_logs_desc"           => "These logs contain all MySQL queries that are run when utilising the help desk. The logs are only stored when debug mode is manually enabled in the app configuration file.",
    "twig_operator_signature"   => "The {{ operator.signature|raw }} merge field will be processed at runtime hence the preview may be incorrect.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Allows running other brands on your SupportPal installation.",
    "no_branding"               => "No Branding",
    "no_branding_desc"          => "Removes SupportPal branding from the client-facing end of the help desk.",
    "multi_ip"                  => "Multi-IP Support",
    "multi_ip_desc"             => "Allows locking SupportPal to more than one internal/external IP.",
    "purchase"                  => "Purchase",
    "ticket_number_missing"     => "For ticket related emails, the {{ ticket.number }} merge field should be present in the email subject and must be wrapped in either <em>[#{{ ticket.number }}]</em> or <em>(#{{ ticket.number }})</em> in order to route replies to the correct ticket. If you would like to remove the ticket number, please consider enabling <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>email sub-addressing</a>.",

);
