<?php

return array(

    "user"                          => "Usuario|Usuarios",
    "user_details"                  => "Detalles del usuario",
    "add_user"                      => "Añadir usuario",
    "account_active"                => "Cuenta activa",
    "account_active_desc"           => "Alterna para habilitar y deshabilitar el acceso a secciones autenticadas.",

    "op_settings_dept_desc"         => "Selecciona los departamentos que el operador puede ver y en los que puede responder a tickets.",

    "organisation"                  => "Organización|Organizaciones",
    "members"                       => "Miembro|Miembros",
    "owner"                         => "Propietario",
    "manager"                       => "Manager",
    "access_level"                  => "Nivel de acceso",
    "access_level_desc"             => "Define el nivel de acceso para el usuario en la organización, basado en la siguiente información:<br /><strong>Manager</strong> - Puede ver tickets abiertos por todos los usuarios en la organización y administrar usuarios en la organización<br /><strong>Usuario</strong> - Puede ver tickets solo abiertos por sí mismo",
    "manage_organisation"           => "Administrar organización",
    "leave_organisation"            => "Dejar organización",
    "user_membership"               => "Suscripción del usuario",
    "transfer_ownership"            => "Transferir propiedad",
    "transfer_ownership_desc"       => "Como el actual propietario de la organización, no puedes ser eliminado como manager y solo tú puedes eliminar la organización. Puedes transferir la propiedad de la organización a otra persona, pero ten en cuenta que esta acción no se puede revertir.",
    "transfer_ownership_operator"   => "Solo el propietario puede eliminar la organización y no puede ser eliminado. Utiliza esta opción para cambiar la propiedad a otro usuario en la organización.",
    "start_typing_name"             => "Empieza introduciendo un nombre...",
    "organisation_add_user"         => "Añadir usuario a la organización",
    "organisation_desc"             => "Cada organización puede tener <strong>managers</strong>, los cuales pueden administrar usuarios y leer y responder a tickets de otros, y <strong>usuarios</strong>, los cuales pueden abrir tickets pero no pueden leer o responder a tickets de otros.",
    "organisation_operator_desc"    => "Añade usuarios existentes a esta organización haciendo click en \"Añadir Usuario\" y buscando su nombre. Date cuenta de que al añadir un usuario se eliminará cualquier enlace que ellos tengan con otra organización.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Puede administrar otros usuarios así como ver y responder a los tickets de otros usuarios.<br /><strong>Usuario</strong> - Solo puede abrir tickets en nombre de la organización y responder a sus propios tickets.",
    "send_password_reset"           => "Enviar enlace para restablecer la contraseña",

    "profile"                       => "Perfil",
    "phone"                         => "Número de teléfono",

    "login"                         => "Iniciar sesión",
    "remember_me"                   => "Recordarme",
    "logout"                        => "cerrar sesión",
    "return_to_login"               => "Volver al inicio de sesión",

    "user_register_disabled"        => "Lo sentimos, el registro de usuarios públicos está actualmente desactivado.",
    "success_register"              => "¡Cuenta registrada con éxito!",
    "register_now"                  => "Registrar ahora",
    "register"                      => "Registrar",
    "register_account"              => "Registrar cuenta",
    "signed_up"                     => "Registrado",
    "last_active"                   => "Activo por última vez",

    "forgot_password"               => "¿Olvidaste tu contraseña?",
    "reset_password"                => "Resetear contraseña",
    "password_reset_complete"       => "Restablecimiento completado",
    "set_password"                  => "Establece una contraseña",
    "only_enter_to_change"          => "Solo introduce para cambiar",
    "please_set_password"           => "Por favor, establece tu nueva contraseña más abajo.",
    "missing_email_or_reset"        => "Dirección de correo electrónica o reset token ausentes.",

    "firstname"                     => "Nombre",
    "lastname"                      => "Apellido",
    "formatted_name"                => "Nombre con formato",
    "country"                       => "País",
    "avatar"                        => "Avatar",
    "confirm_password"              => "Confirmar contraseña",

    "confirmed"                     => "Confirmado",
    "unconfirmed"                   => "Sin confirmar",

    "group"                         => "Grupo de usuarios|Grupos de usuarios",
    "group_members"                 => "Miembros del grupo",
    "operator_group"                => "Grupo de operadores|Grupos de operadores",
    "add_group"                     => "Añadir al grupo",

    "customfield"                   => "Campo personalizado del usuario|Campos personalizados del usuario",
    "customfield_order"             => "Arrastra las filas para cambiar el orden en el que los campos personalizados aparecen para los usuarios.",

    "role"                          => "Función|Funciones",

    "operator_login_log"            => "Registro del acceso del operador",
    "system_activity_log"           => "Registro de la actividad del sistema",
    "activity_log"                  => "Registro de la actividad",

    "mass_email"                    => "Enviar correo masivo",
    "send_email"                    => "Enviar correo",
    "choose_template"               => "Elegir plantilla...",

    "ldap_account"                  => "Cuenta LDAP|Cuentas LDAP",
    "ldap_operator_desc"            => "Busca un operador existente, o crea uno nuevo.",
    "ldap_server"                   => "Servidor LDAP",
    "ldap_server_desc"              => "El nombre de host del servidor. Alternativamente, puedes especificar todo el LDAP URI. Por ejemplo: ldaps://ldap.server:1234/ se conectará a través del SSL al puerto 1234.",
    "ldap_username"                 => "Nombre de usuario LDAP",
    "ldap_username_desc"            => "El nombre de usuario que el operador utilizará para iniciar sesión en el Help Desk (su nombre de usuario LDAP.)",
    "ldap_rdn"                      => "LDAP RDN o DN",
    "ldap_rdn_desc"                 => "El nombre distintivo para el nombre de usuario LDAP, por ejemplo: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "Detalles LDAP",
    "ldap_extension_missing"        => "La extensión php-ldap no se encuentra actualmente cargada. Los usuarios no podrán iniciar sesión a través del LDAP.",

    "operator_details"              => "Detalles del operador",

    "email_notifications"           => "Notificaciones de correo",
    "email_notifications_desc"      => "Las notificaciones de correo que se recibirán del sistema.",

    "enable_ldap"                   => "Permitir inicio de sesión LDAP",
    "enable_ldap_desc"              => "Si utilizas LDAP, puedes activarlo para inicio de sesión del operador. Después de activarlo, dirígete a la página de ajustes de cuentas LDAP para configurarlo.",
    "user_reg_enabled"              => "Registro del usuario activado",
    "user_reg_enabled_desc"         => "Permitir a los nuevos usuarios registrar una cuenta en el frontend.",
    "user_reg_captcha"              => "Captcha del registro del usuario",
    "user_reg_captcha_desc"         => "Si se debería mostrar el captcha a los nuevos usuarios que se estén registrando.",
    "user_name_format"              => "Formato del nombre",
    "first_last"                    => "Nombre Apellido",
    "last_first"                    => "Apellido Nombre",
    "first_l"                       => "Nombre A.",
    "f_last"                        => "N. Apellido",
    "password_length"               => "Longitud de la contraseña",
    "password_length_desc"          => "La longitud mínima de caracteres de la contraseña cuando registras o actualizas una cuenta.",
    "password_strength"             => "Seguridad de la contraseña",
    "password_strength_desc"        => "Selecciona qué caracteres se requieren cuando registras una contraseña de usuario.",
    "password_str_must_contain"     => "Debe contener:",
    "password_str_letters"          => "Al menos un carácter alfabético.",
    "password_str_digits"           => "Al menos un dígito.",
    "password_str_case"             => "Caracteres en mayúsculas y minúsculas.",
    "password_str_symbols"          => "Al menos un símbolo.",

    "load_template"                 => "Cargar plantilla",
    "load_template_desc"            => "Al seleccionar una plantilla se reemplazará el actual asunto y mensaje del correo.",
    "clear_template"                => "Borrar plantilla",

    "personal_settings"             => "Ajustes personales",
    "personal_settings_desc"        => "Actualiza tu propio perfil y modifica los ajustes que tienen que ver solo con tu cuenta de operador.",
    "two_fa"                        => "Autenticación en dos fases",
    "notifications"                 => "Notificaciones",
    "two_fa_success_disabled"       => "La autenticación en dos fases se ha desactivado con éxito.",
    "two_fa_success_enabled"        => "La autenticación en dos fases se ha activado con éxito.",
    "two_fa_incorrect"              => "El código es incorrecto. Asegúrate de que el código que has introducido es correcto y que la hora del servidor está sincronizada.",
    "two_fa_enabled"                => "2FA habilitado",
    "two_fa_disable"                => "Para deshabilitar 2FA, por favor, veríficalo abajo.",
    "two_fa_enable"                 => "Para habilitar 2FA, por favor, configura la cuenta en tu teléfono usando los detalles de abajo y verifícalo.",
    "verify_code"                   => "Verificar código",
    "verify_and_disable"            => "Verificar & deshabilitar",
    "verify_and_enable"             => "Verificar & Habilitar",
    "verify_code_desc"              => "Introduce un código válido para tu cuenta 2FA para desactivar la autenticación 2FA.",
    "qr_code"                       => "Código QR",
    "two_fa_code"                   => "Código 2FA",
    "two_fa_secret"                 => "Secreto 2FA",
    "two_fa_secret_desc"            => "Por favor, almacena esto en algún lugar seguro ya que lo necesitarás para re-añadir la cuenta autenticadora a tu teléfono si perdieras el acceso.",
    "two_fa_verify_desc"            => "Descarga e instala una de las siguientes aplicaciones y escanea el código QR o introduce la clave secreta. Esto servirá para establecer tu cuenta en tu dispositivo. Una vez realizado, podrás ver la cuenta y se generará un código de 6 dígitos que debes introducir arriba para verificar y completar la configuración. Por favor, asegúrate de hacer click en verificar antes de que expire el código. La hora de tu servidor necesitará estar en sincronía con un servidor NTP para funcionar correctamente.",
    "display_notifications"         => "Mostrar notificaciones",
    "display_notifications_desc"    => "El sistema te notificará cuando se creen nuevos tickets o respuestas o cuando inicien sesión otros operadores. Puedes elegir entre notificaciones del escritorio o notificaciones en el navegador (in-browser), o puedes deshabilitarlo por completo.",
    "desktop_notifications"         => "Notificaciones del escritorio",
    "browser_notifications"         => "Notificaciones del navegador",
    "operator_template"             => "Plantilla del operador",

    "search_for_user"               => "Buscar usuario...",
    "select_operator"               => "Seleccionar un operador...",
    "select_group"                  => "Seleccionar un grupo...",

    "your_ip_has_been_banned"       => "Tu IP ha sido baneada.",
    "password_reset_success"        => "¡Contraseña restablecida con éxito!",

    "simpleauth_token_expired"      => "El token de acceso ha expirado.",
    "simpleauth_token_invalid"      => "El token de acceso proporcionado es inválido.",
    "simpleauth_invalid_guard"      => "No se puede iniciar sesión por no ser un usuario válido.",
    "simpleauth_not_allowed"        => "Los operadores no pueden iniciar sesión con SimpleAuth actualmente.",

    /*
     * 2.0.2
     */

    "email_history"                 => "Historial de correos",
    "view_email"                    => "Ver correo",

    "ban_after_count"               => "Banear IP después de intentos fallidos de inicio de sesión",
    "ban_after_count_user"          => "El número de intentos de inicio de sesión fallidos previos a que la IP del usuario se banee, con lo que ya no pueden iniciar sesión en el frontend durante el tiempo que se configure. Al establecerlo a 0, se deshabilitará cualquier baneo de la IP por completo.",
    "ban_after_count_operator"      => "El número de intentos de inicio de sesión fallidos previos a que la IP del usuario se banee, con lo que ya no pueden iniciar sesión en el panel del operador o API durante el tiempo que se configure. Al establecerlo a 0, se deshabilitará cualquier baneo de la IP por completo.",
    "ban_length"                    => "Duración del baneo de la IP",
    "ban_length_desc"               => "La duración del baneo de la IP cuando se alcanza el número de intentos fallidos de inicio de sesión en un solo día.",
    "n_failed_logins"               => ":count intentos fallidos de inicio de sesión en 24 horas",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Descansando...",
    "operator_session_expired"      => "Llevas un rato inactivo o has iniciado sesión en otro dispositivo, así que me he echado una pequeña siesta. Por favor, despiértame volviendo a iniciar sesión.",
    "log_back_in"                   => "Volver a iniciar sesión",
    "all_users"                     => "Todos los usuarios",
    "all_operators"                 => "Todos los operadores",
    "email_per_batch"               => "Correos por lote",
    "email_per_batch_desc"          => "El número de correos que se envían juntos al mismo tiempo.",
    "batch_interval"                => "Intervalo de lotes",
    "batch_interval_desc"           => "El intervalo entre los lotes de correos en minutos. 1 minuto es el mínimo.",
    "select_user_groups"            => "Selecciona los grupos de usuarios/operadores o introduce direcciones de correos electrónicos...",
    "mass_email_sending_time"       => "Se tardará aproximadamente :time en enviar todos los correos.",
    "organisations_enabled"         => "Organizaciones habilitadas",
    "organisations_enabled_desc"    => "Por defecto, los usuarios pueden añadir una organización a su perfil y añadir otros usuarios a esa organización. Si solo tratas con consumidores, puedes deshabilitar la opción de la organización y ocultarla de la interfaz.",
    "manager_notifications"         => "Notificaciones del manager de la organización",
    "manager_notifications_desc"    => "Si los managers de las organizaciones deberían recibir actualizaciones por correo de tickets abiertos por otros usuarios en la organización por defecto. Cada manager tendrá su opción personal para esto en su perfil e invalidar este ajuste.",
    "manager_email_notifications_desc" => "Si deberían recibir notificaciones por correo de novedades de los tickets abiertos por otros usuarios en la organización.",
    "organisation_notifications_desc" => "Si te gustaría recibir notificaciones por correo de novedades de los tickets abiertos por otros usuarios en tu organización.",
    "select_operator_group_desc"    => "Por favor, selecciona al menos un grupo de operadores para este operador.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Campo personalizado de la organización|Campos personalizados de la organización",
    "recent_users"                  => "Usuarios recientes",
    "recent_organisations"          => "Organizaciones recientes",
    "group_brand_desc"              => "Selecciona a qué marcas tienen permiso para acceder los operadores de este grupo.",
    "select_operators"              => "Seleccionar operador(es)...",
    "select_groups"                 => "Seleccionar grupo(s)...",
    "group_department_desc"         => "Asignar todos los miembros de este grupo a departamentos. Los operadores también pueden ser asignados individualmente en los ajustes del departamento.",
    "op_settings_group_dept"        => "Asignados a través de grupos de operadores:",
    "op_settings_group_dept_desc"   => "Estos departamentos son heredados automáticamente de los grupos de operadores seleccionados arriba. Para asignarlo a través de un grupo de operadores, edita los ajustes del grupo de operadoreso de departamento.",
    "op_settings_individual_dept"   => "Asignados individualmente:",
    "op_settings_individual_dept_desc" => "Estos departamentos son una adición a cualquiera de los departamentos a los que el operador este asignado a través de sus grupos arriba.",
    "also_registered_other_brand"   => "Este usuario también está registrado en la marca :brands.|Este usuario también está registrado en las marcas :brands.",
    "signature"                     => "Firma|Firmas",
    "signature_desc"                => "Crear firmas personales del ticket, con opción a personalizarla basada en la marca/departamento del ticket. La firma por defecto se utiliza cuando no se puede encontrar una firma para un departamento y/o marca específicos.",
    "operator_signature"            => "Firma del operador|Firmas del operador",
    "ticket_signature_desc"         => "Establecer la firma por defecto del ticket del operador.",
    "operator_signature_desc"       => "Firmas adicionales para departamentos específicos y/o marcas se pueden establecer en la sección <a href=':route' target='_blank'>Firmas del operador</a>.",
    "view_organisation"             => "Ver organización",
    "new_owner"                     => "Nuevo propietario",
    "operator_role"                 => "Función del operador|Funciones del operador",
    "manage_users"                  => "Administrar usuarios",
    "manage_organisations"          => "Administrar organizaciones",
    "manage_operators"              => "Administrar operadores",
    "user_profile"                  => "Perfil de usuario",
    "organisation_access_level"     => "Nivel de acceso de la organización",
    "organisation_notifications"    => "Notificaciones de la organización",
    "organisation_users"            => "Usuarios de la organización",
    "organisation_users_ticket"     => "Arriba se encuentra una lista de los managers de tu organización a los que se les enviarán actualizaciones sobre este ticket.",

    /*
     * 2.1.1
     */
    "change_password"               => "Cambiar contraseña",
    "current_password"              => "Contraseña actual",
    "new_password"                  => "Nueva contraseña",
    "personal_confirm_password"     => "Por favor, confirma tu contraseña actual para establecer una nueva contraseña.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Buscar un usuario/operador...",
    "two_fa_personal_settings"      => "El operador puede habilitar 2FA en sus ajustes personales.",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "El formato que se utiliza para mostrar nombres de usuarios en el sistema.",
    "operator_name_format_desc"     => "El formato que se utiliza para mostrar nombres de operadores en el sistema.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "¿Eliminar de :record?",
    "remove_from_warn"              => "Esto eliminará para siempre al usuario <strong>:name</strong> de :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Inicio de sesión de redes sociales",
    "social_login_provider_desc"    => "Permitir a los usuarios registrarse e iniciar sesión usando su cuenta de :provider.",
    "social_login_provider_docs"    => "Por favor, comprueba nuestra documentación para configurar un <a href=':link'>inicio de sesión de :provider</a>.",
    "facebook_app_id"               => "ID de aplicación",
    "facebook_app_secret"           => "Secreto de aplicación",
    "facebook_redirect_url"         => "La siguiente URL <strong>debe</strong> introducirse para el inicio de sesión en Facebook 'URI de redireccionamiento de OAuth válidos':",
    "google_client_id"              => "ID del cliente",
    "google_client_secret"          => "Secreto del cliente",
    "google_redirect_url"           => "La siguiente URL <strong>debe</strong> introducirse para Google 'URIs de redirección autorizados':",
    "steam_api_key"                 => "Clave de API",
    "twitter_consumer_key"          => "Clave de consumidor",
    "twitter_consumer_secret"       => "Secreto de consumidor",
    "twitter_redirect_url"          => "La siguiente URL <strong>debe</strong> introducirse para la aplicación de Twitter 'Callback URL':",
    "login_via"                     => "Iniciar sesión a través de :provider",
    "register_with"                 => "Registrarse con :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Por favor, inicia sesión para completar la vinculación con tu cuenta de redes sociales.",
    "social_linking_register"       => "Por favor, completa los detalles más abajo para completar el registro de tu cuenta. Tu cuenta de redes sociales se vinculará automáticamente.",
    "already_registered"            => "¿Ya estás registrado/a?",
    "linked_accounts"               => "Cuentas vinculadas",
    "unlink_account"                => "Desvincular cuenta :record",
    "unlink_account_warning"        => "Al desvincular la cuenta de redes sociales no podrás utilizarla para iniciar sesión directamente en la cuenta.",
    "failed_login"                  => "Inicio de sesión fallido|Inicios de sesión fallidos",
    "resend_confirmation"           => "<strong><a href=':link'>Haz click aquí</a></strong> para que te enviemos un nuevo correo de confirmación.",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "debe tener permisos de \":permission\"",
    "deleted_user"                  => "Usuario eliminado",
    "access_level_not_owner"        => "No es posible cambiar el nivel de acceso de los propietarios de la organización. Transfiere la propiedad de la organización a otro usuario primero viendo la organización y después haciendo click en la pestaña 'Usuarios'.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Selecciona una organización existente o introduce una nueva...",

    /*
     * 2.5.0
     */
    "organisation_domain_desc"      => "Introduce cada dominio que posee la organización. Los usuarios que se registran con una dirección de correo electrónico que pertenece a uno de esos dominios se añadirán automáticamente a la organización. Recomendamos verificar que el usuario es realmente parte de la organización si no han confirmado la propiedad de su correo electrónico.",
    "changing_email_desc"           => "Al cambiar la dirección de correo se requerirá que el usuario confirme la propiedad de su correo electrónico la próxima vez que inicien sesión.",
    "unconfirmed_user_desc"         => "El usuario no ha confirmado la propiedad de este correo electrónico.",
    "unregistered_user_desc"        => "Esta cuenta ha sido creada automáticamente sin una contraseña. Puedes enviar un correo de confirmación para dejarles configurar su propia cuenta o establecer una contraseña para ellos más abajo.",
    "send_confirmation_email"       => "Enviar correo de confirmación",
    "mark_as_confirmed"             => "Marcar como confirmado",
    "password_reset_already"        => "Ya has confirmado la propiedad de este correo electrónico, por lo que puedes proceder a inicar sesión.",
    "unconfirmed_account"           => "Por favor, comprueba tu correo para confirmar la propiedad de esta dirección de correo.",
    "success_register_desc"         => "Gracias por registrar una cuenta. Por favor, comprueba tu correo para completar la configuración.",
    "reset_request_desc"            => "Por favor, comprueba tu correo para completar el proceso de restablecimiento de la contraseña.",
    "resend_confirmation_sent"      => "Se ha enviado un nuevo correo de confirmación y debería llegar en pocos minutos.",
    "register_confirm_desc"         => "Gracias por confirmar la propiedad de tu correo. Por favor, introduce una contraseña más abajo para terminar la configuración de tu cuenta.",
    "thank_you_confirm"             => "Gracias por confirmar la propiedad de tu dirección de correo electrónico.",
    "use_gravatar"                  => "Usar Gravatar",
    "use_gravatar_desc"             => "Gravatar es un servicio que ofrece un avatar globalmente reconocido a sus usuarios registrados. El Help Desk enviará automáticamente una petición a secure.gravatar.com con un Hash MD5 de cada dirección de correo electrónico del usuario para ayudar a mostrar un avatar. El Hash MD5 puede ser visible públicamente en el frontend HTML. Recomendamos que actualices tu política de privacidad si estableces esta función.",

    /*
     * 2.6.0
     */
    "updating_email_address"        => "Para completar la actualización de tu correo electrónico, por favor, haz click en el link enviado a :email para confirmar la propiedad de la nueva dirección de correo.",
    "confirmation"                  => "Confirmación",
    "confirmation_email_in_use"     => "La dirección de correo electrónico ya está siendo utilizada por otra cuenta.",
    "continue_to_login"             => "Por favor, continúa a <a href=':route'>iniciar sesión</a>.",
    "reset_request_desc"            => "Si se encontrase una cuenta correspondiente, se te enviará un correo en un breve período de tiempo para permitirte restablecer tu contraseña.",
    "password_reset_error"          => "Puede que el link haya expirado. Si tu link no funciona por cualquier motivo, por favor, solicita uno nuevo.",

);
