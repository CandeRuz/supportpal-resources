<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "slogan"                    => "Atención al cliente, fácil y eficaz.",
    "operator_panel"            => "Panel del operador",
    "helpdesk_software"         => "Software de asistencia técnica por",
    "carefully_crafted"         => "Cuidadosamente elaborado por",
    "welcome"                   => "Bienvenido a SupportPal",
    "welcome_desc"              => "Has tomado la mejor decisión. Pulsa comenzar para disfrutar de un recorrido a través de las prestaciones y características de nuestro producto.",

    // Dashboard
    "welcome_back"              => "Bienvenido de nuevo",
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
    "development_license"       => "¡Licencia de desarrollo!",
    "development_license_desc"  => "Esta instalación utiliza una licencia de desarrollo que solo es válida en direcciones RFC1918. No está permitido utilizarla en producción.",
    "license_status"            => "Estado de la licencia",
    "license_code"              => "Código de la licencia",
    "change_license"            => "Cambiar licencia",
    "license_info"              => "Información sobre la licencia",
    "license_owner"             => "Propietario de la licencia",
    "license_created"           => "Licencia creada",
    "license_type"              => "Tipo de licencia",
    "no_branding"               => "No Branding",
    "branding"                  => "Branding",
    "license_expires"           => "La licencia expira",
    "license_valid_ip"          => "IP(s) válidos de la licencia",
    "license_valid_domain"      => "Dominio(s) válidos de la licencia",
    "support_status"            => "Estado de la asistencia",
    "support_expires"           => "La asistencia expira",
    "version_info"              => "Información sobre esta versión",
    "installed_version"         => "Versión instalada",
    "available_version"         => "Versión disponible",
    "monthly_product"           => "* Your expiration date will automatically adjust on a monthly basis once any outstanding invoices are paid.",

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
    "containing_text_desc"      => "Please enter a string (particular word to ban or email address), all strings are case-insenstive. <br />The string can also take advantage of <a href='http://www.regular-expressions.info/'>regular expressions</a>, an example of this would be: 's.{1,}p.{1,}a.{1,}m'. You do not need to worry about delimiters.",
    "ip_filtering"              => "Filtro de IP",
    "content_filtering"         => "Filtro de contenido",
    "filter_description"        => "Por favor, selecciona un filtro de contenido adecuado",
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
    "your_company"              => "Tu compañía",

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
    "email_log"                 => "Email Log",
    "email_queue"               => "Email Queue",
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
    "email_content_desc"        => "Insertar un asunto por defecto y contenido del correo para esta plantilla. También puedes escribir la plantilla en otras lenguas. Si una plantilla no está establecida en otra lengua, se utilizará --, it will use the default data.",
    "outgoing"                  => "Outgoing",
    "incoming"                  => "Incoming",
    "incoming_spam"             => "Incoming (Rejected - Spam)",
    "incoming_throttled"        => "Incoming (Rejected - Throttled)",
    "email_subject"             => "Asunto del correo",
    "twig_html_warning"         => "No se permite Twig dentro de etiquetas o atributos HTML y será automáticamente eliminado al guardar.",

    // Modules
    "modules"                   => "Sección|Secciones",
    "modules_desc"              => "Debajo se encuentra una lista con todas las secciones dispoinibles. Haz click en el icono de editar para actualizar los ajustes de esa sección.",
    "module_disable"            => "Las secciones desactivadas se elimarán del frontend y la interfaz del operador.",

    // Scheduled tasks
    "scheduled_task"            => "Tarea programada|Tareas programadas",
    "interval_desc"             => "Establecer la frecuencia con la que se ejecuta esta tarea, por ejemplo, estableciendo 5 minutos significará que  la tarea se ejecutará cada 5 minutos si el cronograma está activo y funcionando.",
    "cron_settings"             => "Ajustes del cronograma",
    "cron_makesure"             => "Por favor, crea una tarea del cronograma con la siguiente entrada: ",
    "cron_running"              => "Ejecutándose",
    "cron_not_running"          => "No ejecutándose",
    "task_ran"                  => "Successfully ran scheduled task manually.",
    "task_failed"               => "Failed trying to run scheduled task manually.",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "installed_plugins"         => "Plugins instalados",
    "visit_plugin"              => "Visitar Plugin Site",
    "uninstall_plugin_warning"  => "Al desinstalar el plugin se eliminarán todas las carpetas y la información asociada, por lo que en su lugar recomendamos simplemente desactivar el plugin.",

    // Messages
    "last_activity"             => "Actividad reciente",
    "send_to"                   => "Enviar a",
    "inbox"                     => "Buzón de entrada",
    "compose"                   => "Redactar",

    // Utilities
    "utilities"                 => "Utilities",

    // System Cleanup
    "system_cleanup"            => "Limpieza del sistema",
    "system_cleanup_desc"       => "Utiliza las opciones disponibles para eliminar información que ya no sirva o sea necesaria.",
    "files"                     => "Files",
    "files_desc"                => "Los siguientes items se almacenan como archivos en el sistema de archivos.",
    "logs"                      => "Logs",
    "logs_desc"                 => "The following items are stored as records in the database.",
    "empty"                     => "Empty",
    "prune"                     => "Prune",
    "total_records"             => "Total records",
    "system_cache"              => "System Cache",
    "system_cache_desc"         => "Used to store system data that doesn't change regularly to speed up the application.",
    "template_cache"            => "Template Cache",
    "template_cache_desc"       => "Pre-compiled versions of the template views are stored to improve loading times.",
    "attachments_desc"          => "Ticket attachments are stored on the file system but may take up room, you can prune attachment files before a certain date.",
    "system_activity_log_desc"  => "Stores all activity by users, operators and the system itself, you can prune records before a certain date.",
    "email_log_desc"            => "Stores all incoming and outgoing emails, you can prune records before a certain date.",
    "operator_login_log_desc"   => "Stores each time an operator logins with their IP, you can prune records before a certain date.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Show Captcha",

    // Widgets
    "dashboard"                 => "Dashboard",
    "add_remove_widget"         => "Add / Remove Widgets",
    "todo_record"               => "to do record",
    "enable_tour"               => "Enable Product Tour",

    // Product Tour
    "dashboard_desc"            => "Your own personal dashboard. Widgets can be removed, minimised and moved around!",
    "private_messages"          => "Private Messages",
    "messages_desc"             => "Private Messages serve as a useful way for 1:1 conversations with other help desk operators.",
    "configure"                 => "Configure Your Help Desk",
    "configure_desc"            => "SupportPal contains a number of settings enabling you to configure the help desk to your own preference.",
    "company_name_desc"         => "Your company name is used for all correspondence with users.",
    "default_email"             => "Default Email Address",
    "default_email_desc"        => "The default email address to use for all outbound correspondence to users.",
    "dept_settings_desc"        => "We realise that departments within your organisation operate differently. Department settings enable you to override global settings.",
    "department_desc"           => "Departments are just like those within your organisation. Useful for ensuring customer enquiries get to the correct staff member(s) quickly.",
    "department_email"          => "Department Email Addresses",
    "dept_email_desc"           => "Multiple email addresses can be assigned to a given department. Email collection is performed against the configured addresses to pull emails from your customers into the help desk.",
    "dept_tmpl"                 => "Department Email Templates",
    "dept_tmpl_desc"            => "Sometimes you may wish to change, or completely disable, department email templates. You can define department specific email templates and enable them here.",
    "schedule_task_desc"        => "Scheduled Tasks are used to automate various processes within SupportPal, including email-based ticket collection.",
    "schedule_task_2"           => "Scheduled Tasks require a cron job to be created in order to operate. The interval for each task performed by the cron job can be adjusted via the edit form.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Create a cron job similar to the example provided below on your server for the scheduled tasks to run automatically.",
    "ticket_channel_desc"       => "Ticket Channels are methods for creating tickets. They can be easily extended to include your own channels, for example tickets opened via Instagram.",
    "ticket_channel_2"          => "We provide a number of default channels. You may wish to activate and configure the Facebook and Twitter channels to collect tickets generated via social media.",
    "user_desc"                 => "Users who interact with your system are displayed here. You can add, edit, and delete users as appropriate.",
    "organisation_desc"         => "Users can be assigned to organisations enabling them access to tickets opened by other users within their organisation.",
    "operator_desc"             => "Other members of staff can be added as operators here, along with managing which departments they are assigned to.",
    "ticket_desc"               => "The ticket grid contains a collection of all tickets relevant to you.",
    "ticket_desc2"              => "The ticket grid can be ordered, filtered and its column layout adjusted to your preference.",
    "ticket_toolbar"            => "Tool Bar",
    "ticket_desc3"              => "Bulk actions can be performed on tickets using the ticket tool bar.",
    "tour_complete"             => "Tour Complete!",
    "tour_complete_desc"        => "Thank you for using SupportPal.<br /><br />We now recommend that you follow the getting started guide below to configure your help desk.",

    // IP Ban
    "ip_ban_time_desc"          => "If the ban is permanent or temporary.",
    "expiry"                    => "Expiry",
    "expired"                   => "Expired",
    "expiry_time"               => "Expiry Time",
    "expiry_time_desc"          => "The time when the ban will expire, if a date is not set or in the past, it will automatically set to 24 hours from now.",
    "permanent"                 => "Permanent",

    // Languages
    "no_enabled_languages"      => "Failed trying to update the :item. At least one language must be enabled at all times.",

    // General Settings
    "website"                   => "Website",
    "locale"                    => "Locale",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Admin Folder",
    "admin_folder_desc"         => "Set the folder name to visit for the operator panel. It is recommended to change from the default \"admin\" name from a security point of view.",
    "enable_ssl"                => "Enable SSL",
    "force_ssl"                 => "Force SSL for Operators",
    "force_ssl_desc"            => "Force all operators to use the secure version of your website for the operator panel.",
    "frontend_template"         => "Frontend Template",
    "operator_template"         => "Operator Template",
    "maintenance_mode"          => "Maintenance Mode",
    "maintenance_mode_desc"     => "Disables the public help desk functionality and shows a maintenance notice. Edit resources/templates/frontend/[template]/core/maintenance.twig to change the message that is shown to users.",
    "default_user_country"      => "Default User Country",
    "default_user_country_desc" => "The country that will be selected by default when users are registering.",
    "system_timezone"           => "System Timezone",
    "system_timezone_desc"      => "The default timezone that is applied throughout the system. Operators can change their timezone in their personal settings.",
    "date_format"               => "Date Format",
    "date_format_desc"          => "The date format that is used globally.",
    "time_format"               => "Time Format",
    "time_format_desc"          => "The time format that is used globally.",
    "simpleauth_key"            => "SimpleAuth Key",
    "simpleauth_key_desc"       => "The key for our single sign on option, minimum 16 characters.",
    "simpleauth_operators"      => "Allow for Operators",
    "frontend_logo"             => "Frontend Logo",
    "base_url"                  => "System URL",
    "base_url_desc"             => "Enter the full web address of your installation, used to generate the URLs that are sent to users.",
    "debug"                     => "Debug",
    "debug_mode"                => "Debug Mode",
    "debug_mode_desc"           => "Enable debug mode to display errors, only use for debugging or if instructed by support. Errors are otherwise stored in the logs at /storage/logs.",
    "pretty_urls"               => "Pretty URLs",
    "pretty_urls_desc"          => "Enabling will remove index.php from URLs, only enable if you are able to access the operator panel without index.php. Disable if you do not have mod_rewrite installed, .htaccess files are not allowed or haven't converted the Apache .htaccess rewrite rules to work with your alternative web server.",

    /*
     * 2.0.1
     */
    "incoming_rejected"         => "Incoming (Rejected)",

    /*
     * 2.0.2
     */
    "cron_makesure"             => "For assistance registering the cron job, please see <a target='_blank' href='https://docs.supportpal.com/current/New+Installation#CronJob'>Cron Job Help</a>.",
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Enabling this will force the whole frontend and operator area to use secure connections, a recommended setting. Please ensure HTTPS functions correctly on your server before enabling.",
    "unexpected_template_error" => "An unexpected error occurred while syntax checking the template. Please try again.",
    "empty_template_preview"    => "Please provide a valid template in order to use the preview function.",
    "no_department_address"     => "Failed to find a department address in the recipient list.",
    "email_loop_detected"       => "Loop detected - email sent from a department address.",
    "email_ticket_locked"       => "Ticket locked. User has been asked to open a new ticket via email.",
    "email_no_body"             => "Failed to identify the email message body.",
    "email_runtime_error"       => "A runtime error occurred while creating the ticket/reply.",
    "email_reply_disabled"      => "User email replies have been disabled for this department.",
    "email_throttled"           => "Too many incoming emails from user. The limit is :max_requests emails every :decay_time minutes.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Edit the settings that apply to all of SupportPal. If you wish to edit settings for a specific section, e.g. Tickets, open the section in the sidebar to view available settings for that module. Settings related to your brand(s) can be found by clicking Brands in the sidebar.",
    "brand"                     => "Brand|Brands",
    "brand_desc"                => "A brand is your customer-facing identity within SupportPal, allowing several channels of communication. Several brands can be operated seamlessly under a single, unified operator panel.",
    "brand_name"                => "Brand Name",
    "default_brand"             => "Default Brand",
    "default_brand_desc"        => "Select the brand that will be used by default when visitors visit the frontend and a matching brand cannot be found.",
    "brand_name_desc"           => "The name of the brand as seen by end-users.",
    "brand_enabled_desc"        => "Toggle to enable or disable the brand. Disabled brands cannot be utilised and won't count as part of the brands allowed on your license, disabling can be used to temporarily hide a brand and/or retain information. Deleting a brand will remove all information including users and tickets that are related to it.",
    "inherit_global_setting"    => "Inherit Global Setting",
    "brand_date_format_desc"    => "The date format used for this brand's frontend.",
    "brand_time_format_desc"    => "The time format used for this brand's frontend.",
    "brand_timezone"            => "Brand Timezone",
    "brand_timezone_desc"       => "The timezone that is used by default on this brand's frontend, users will have the option to select their own timezone.",
    "brand_default_lang_desc"   => "The language that is used by default on this brand's frontend.",
    "brand_lang_toggle_desc"    => "If the language dropdown should show on this brand's frontend.",
    "brand_groups_desc"         => "Operators in the selected groups will be able to create, update and delete (depending on role permissions) tickets and other content in this brand.",
    "select_brand"              => "Select a brand...",
    "add_another_language"      => "Añadir otra lengua...",
    "mass_email_brand_desc"     => "Please select which brand the email will be sent from. It will be used to set the sending from name and address, load the correct email template and in the merge fields. If you send to a user group, only users who belong to the selected brand will be emailed.",
    "brand_limit_exceeded"      => "Your license is only permitted to use :allowed brand(s) simultaneously. To purchase additional brands please visit our client area.",
    "additional_brands"         => "Additional Brands",
    "purchase_more"             => "Purchase more",
    "brand_limit_allowed"       => "Your license is currently permitted to use :allowed brand simultaneously.|Your license is currently permitted to use :allowed brands simultaneously.",
    "brand_limit_purchase"      => "If this is incorrect, please <strong>reissue</strong> your license at our <a href='http://www.supportpal.com/manage/' target='_blank'>client area</a> and visit the <a href=':route'>License Information</a> page to synchronise your help desk with our license server.<br />To purchase additional brands, please <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>upgrade your license</a>.",
    "support_no_expiry"         => "Your support and updates are valid.",
    "support_expiry"            => "Your support and updates subscription is valid until :date.",
    "support_status_desc"       => "Please <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renew your support subscription</a> in order to get the latest support and updates from SupportPal.",
    "ip_ban"                    => "IP Ban|IP Bans",
    "ip_whitelist"              => "IP Whitelist",
    "whitelisted_ip"            => "Whitelisted IP",
    "frontend_logo_desc"        => "Change the default logo on the frontend interface for this brand. The field can either be a path relative to the base directory (we recommend to store your logo in the resources/assets/ folder) or a direct URL to the image.",
    "license_path"              => "Installation Path",
    "php_info"                  => "PHP Information",
    "log"                       => "Log|Logs",
    "invalid_department_brand"  => "Department is not assigned to ticket brand.",
    "incoming_rejected"         => "Incoming (Rejected)",

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
    "reply_to"                  => "Reply To",
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
