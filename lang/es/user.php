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
    "access_level_desc"             => "Define el nivel de acceso para el usuario en la organización, basado en el siguiente horario:<br /><strong>Manager</strong> - Puede ver tickets abiertos por todos los usuarios en la organización y administrar usuarios en la organización<br /><strong>User</strong> - Puede ver tickets solo abiertos por sí mismo",
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
    "send_confirmation_email"       => "Enviar correo de confirmación al usuario",
    "send_password_reset"           => "Enviar enlace para restablecer de la contraseña",

    "profile"                       => "Perfil",
    "phone"                         => "Número de teléfono",

    "login"                         => "Iniciar sesión",
    "remember_me"                   => "Recordarme",
    "logout"                        => "cerrar sesión",
    "return_to_login"               => "Volver al inicio de sesión",

    "user_register_disabled"        => "Lo sentimos, el registro de usuarios públicos está actualmente desactivado.",
    "success_register"              => "¡Cuenta registrada con éxito!",
    "success_register_desc"         => "Gracias por registrar tu cuenta. Ahora solo necesitas confirmar tu dirección de correo electrónico antes de iniciar sesión. En breves te enviaremos un correo que contiene un enlace de confirmación para finalizar el proceso.",
    "register_now"                  => "Registrar ahora",
    "register"                      => "Registrar",
    "register_account"              => "Registrar cuenta",
    "register_confirm"              => "Confirmación del registro",
    "register_confirm_desc"         => "Gracias por confirmar tu correo. Por favor, introduce una contraseña para tu cuenta más abajo para finalizar la configuración de tu cuenta.",
    "confirmation_success"          => "¡La confirmación se ha completado con éxito!",
    "confirmation_unsuccessful"     => "la confirmación no se ha podido completar con éxito.",
    "thank_you_confirm"             => "TGracias por confirmar tu cuenta. Por favor, continua a <a href=':route'>iniciar sesión</a>.",
    "signed_up"                     => "Signed up",
    "last_active"                   => "Activo por última vez",

    "reset_request"                 => "Petición de reestablecer la contraseña recibida",
    "reset_request_desc"            => "En breves te enviaremos un correo que contiene un enlace de confirmación que te permitirá reestablecer la contraseña.",
    "forgot_password"               => "¿Olvidaste tu contraseña?",
    "password_reset"                => "Password Reset",
    "password_reset_confirm"        => "Reestablecer Confirmación",
    "reset_password"                => "Reset Password",
    "password_reset_complete"       => "Reestablecimiento completado",
    "set_password"                  => "Establece una contraseña",
    "only_enter_to_change"          => "Solo introduce para cambiar",
    "success_pass_reset"            => "Tu contraseña ha sido reestablecida con éxito. Por favor, continua a <a href=':route'>iniciar sesión</a>.",
    "please_set_password"           => "Por favor, establece tu nueva contraseña más abajo.",
    "emailed_pwd_reset_link"        => "Te hemos enviado un correo con un enlace de reestablecimiento.",
    "operator_email_not_found"      => "No se ha podido encontrar la dirección de correo del operador.",
    "missing_email_or_reset"        => "Missing email address or reset token.",

    "firstname"                     => "Nombre",
    "lastname"                      => "Apellido",
    "formatted_name"                => "Formatted Name",
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
    "ldap_operator_desc"            => "Searching for an existing operator, or create a new one.",
    "ldap_server"                   => "Servidor LDAP",
    "ldap_server_desc"              => "El nombre de host del servidor. Alternativamente, puedes especificar todo el LDAP URI. Por ejemplo: ldaps://ldap.server:1234/ se conectará a través del SSL al puerto 1234.",
    "ldap_username"                 => "Nombre de usuario LDAP",
    "ldap_username_desc"            => "El nombre de usuario que el operador utilizará para iniciar sesión en el helpdesk (su nombre de usuario LDAP.)",
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
    "first_last"                    => "First Last",
    "last_first"                    => "Last First",
    "first_l"                       => "First L.",
    "f_last"                        => "F. Last",
    "password_length"               => "Longitud de la contraseña",
    "password_length_desc"          => "La longitud mínima de caracteres de la contraseña cuando registras o actualizas una cuenta.",
    "password_strength"             => "Seguridad de la contraseña",
    "password_strength_desc"        => "Selecciona qué caracteres se requieren cuando registras una contraseña de usuario.",
    "password_str_must_contain"     => "Debe contener:",
    "password_str_letters"          => "Al menos un caracter alfabético.",
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
    "two_fa_verify_desc"            => "Download and install one of the following applications and scan the QR code or enter the secret key. This will set up your account on your device, you will then be able to view the account and it will generate a 6 digit code that you must enter above to verify and complete the set up. Please ensure to click verify before the code expires. Your server time will need to be in sync with an NTP server to function properly.",
    "display_notifications"         => "Mostrar notificaciones",
    "display_notifications_desc"    => "The system will poll for new tickets, replies and other operators logging in while you have the operator panel open. You can choose between desktop notifications or in-browser notifications, or disabling it completely.",
    "desktop_notifications"         => "Notificaciones del escritorio",
    "browser_notifications"         => "Notificaciones del navegador",
    "operator_template"             => "Plantilla del operador",

    "search_for_user"               => "Buscar usuario...",
    "select_operator"               => "Seleccionar un operador...",
    "select_group"                  => "Seleccionar un grupo...",

    "your_ip_has_been_banned"       => "Tu IP ha sido baneada.",
    "password_reset_error"          => "No se ha podido encontrar la cuenta del usuario o token restablecido. Por favor, verifica que los detalles sean correctos o intenta restablecerlo de nuevo.",
    "password_reset_not_found"      => "Usuario no encontrado o la contraseña no se puede restablecer.",
    "password_reset_expired"        => "El Token ha expirado, por favor intenta restablecerlo de nuevo.",
    "password_reset_invalid"        => "Token inválido, por favor, verifica que los detalles son correctos o intenta restablecerlo de nuevo.",
    "password_reset_success"        => "¡Contraseña restablecida con éxito!",
    "password_reset_already"        => "You have already confirmed your account, you may proceed to login.",

    "simpleauth_token_expired"      => "The access token has expired.",
    "simpleauth_token_invalid"      => "The access token provided is invalid.",
    "simpleauth_invalid_guard"      => "Cannot login as not a valid user.",
    "simpleauth_not_allowed"        => "Operators cannot currently login with SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "Email History",
    "view_email"                    => "View Email",

    "ban_after_count"               => "Ban IP after Failed Logins",
    "ban_after_count_user"          => "The number of failed logins after which the user IP is banned, and they are no longer able to login to the frontend for the configured amount of time. Setting to 0 will disable IP bans completely.",
    "ban_after_count_operator"      => "The number of failed logins after which the user IP is banned, and they are no longer able to login to the operator panel or API for the configured amount of time. Setting to 0 will disable IP bans completely.",
    "ban_length"                    => "Length of IP Ban",
    "ban_length_desc"               => "The length of the IP ban when they reach the configured number of failed logins in a single day.",
    "n_failed_logins"               => ":count failed logins within 24 hours",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Taking a break...",
    "operator_session_expired"      => "You were inactive for a while or logged in on another device so I took a quick nap. Please wake me up by logging back in.",
    "log_back_in"                   => "Log Back In",
    "all_users"                     => "All Users",
    "all_operators"                 => "All Operators",
    "email_per_batch"               => "Emails Per Batch",
    "email_per_batch_desc"          => "The number of emails that are sent together at a time.",
    "batch_interval"                => "Batch Interval",
    "batch_interval_desc"           => "The gap between the email batches in minutes, 1 minute is the minimum.",
    "select_user_groups"            => "Select user/operator groups or type in email addresses...",
    "mass_email_sending_time"       => "It will take approximately :time to send all emails.",
    "organisations_enabled"         => "Organisations Enabled",
    "organisations_enabled_desc"    => "By default, users can add an organisation to their profile and add other users to that organisation. If you are only dealing with consumers, you can disable the organisation option and hide it from the interface.",
    "manager_notifications"         => "Organisation Manager Notifications",
    "manager_notifications_desc"    => "If managers of organisations should receive email updates of tickets opened by other users in the organisation by default. Each manager will have their own personal option for this in their profile and can override this setting.",
    "manager_email_notifications_desc" => "If they should receive email notifications of updates to tickets opened by other users in the organisation.",
    "organisation_notifications_desc" => "If you'd like to receive email notifications of updates to tickets opened by other users in your organisation.",
    "select_operator_group_desc"    => "Please select at least one operator group for this operator.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Organisation Custom Field|Organisation Custom Fields",
    "recent_users"                  => "Recent Users",
    "recent_organisations"          => "Recent Organisations",
    "group_brand_desc"              => "Select which brands the operators in this group will be able to view, create and delete (depending on permissions) tickets and other content.",
    "select_operators"              => "Select operator(s)...",
    "select_groups"                 => "Select group(s)...",
    "group_department_desc"         => "Assign all members of this group to departments, operators can also be assigned individually in the department settings.",
    "op_settings_group_dept"        => "Assigned to via operator groups:",
    "op_settings_group_dept_desc"   => "These departments are inherited automatically from the operator groups selected above. To assign via an operator group, edit the operator group or department settings.",
    "op_settings_individual_dept"   => "Assigned to individually:",
    "op_settings_individual_dept_desc" => "These departments are in addition to any departments the operator is assigned to via their groups above.",
    "also_registered_other_brand"   => "This user is also registered in the :brands brand.|This user is also registered in the :brands brands.",
    "signature"                     => "Signature|Signatures",
    "signature_desc"                => "Create personal ticket signatures, with the option to customise based on the brand/department of the ticket. The default signature is used when a signature for a specific department and/or brand cannot be found.",
    "operator_signature"            => "Operator Signature|Operator Signatures",
    "ticket_signature_desc"         => "Set the operator's default ticket signature.",
    "operator_signature_desc"       => "Further signatures for specific departments and/or brands can be set in the <a href=':route' target='_blank'>Operator Signatures</a> section.",
    "view_organisation"             => "View Organisation",
    "new_owner"                     => "New Owner",
    "operator_role"                 => "Operator Role|Operator Roles",
    "manage_users"                  => "Manage Users",
    "manage_organisations"          => "Manage Organisations",
    "manage_operators"              => "Manage Operators",
    "user_profile"                  => "User Profile",
    "organisation_access_level"     => "Organisation Access Level",
    "organisation_notifications"    => "Organisation Notifications",
    "organisation_users"            => "Organisation Users",
    "organisation_users_ticket"     => "Above is a list of your organisation's managers that will be also emailed updates about this ticket.",

    /*
     * 2.1.1
     */
    "change_password"               => "Change Password",
    "current_password"              => "Current Password",
    "new_password"                  => "New Password",
    "personal_confirm_password"     => "Please confirm your current password to set a new password.",
    "operator_confirm_password"     => "Please confirm your password to make changes to the operator account.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Search for user/operator...",
    "two_fa_personal_settings"      => "The operator can enable 2FA in their personal settings.",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "The format that is used to display user names throughout the system.",
    "operator_name_format_desc"     => "The format that is used to display operator names throughout the system.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Remove From :record?",
    "remove_from_warn"              => "This will permanently remove the <strong>:name</strong> user from the :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Social Login",
    "social_login_provider_desc"    => "Allow users to register and log in using their :provider account.",
    "social_login_provider_docs"    => "Please check over our documentation for setting up <a href=':link'>:provider Login</a>.",
    "facebook_app_id"               => "App ID",
    "facebook_app_secret"           => "App Secret",
    "facebook_redirect_url"         => "The following URL <strong>must</strong> be entered for the Facebook Login 'Valid OAuth redirect URIs':",
    "google_client_id"              => "Client ID",
    "google_client_secret"          => "Client Secret",
    "google_redirect_url"           => "The following URL <strong>must</strong> be entered for the Google 'Authorized redirect URIs':",
    "steam_api_key"                 => "API Key",
    "twitter_consumer_key"          => "Consumer Key",
    "twitter_consumer_secret"       => "Consumer Secret",
    "twitter_redirect_url"          => "The following URL <strong>must</strong> be entered for the Twitter Application 'Callback URL':",
    "login_via"                     => "Log in via :provider",
    "register_with"                 => "Register with :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Please log in to complete linking of your social account.",
    "social_linking_register"       => "Please fill in the details below to complete registration of your account. Your social account will be automatically linked.",
    "already_registered"            => "Already registered?",
    "linked_accounts"               => "Linked Accounts",
    "unlink_account"                => "Unlink :record Account",
    "unlink_account_warning"        => "Unlinking the social account will mean it can no longer be used to log in directly to the account.",
    "failed_login"                  => "Failed Login|Failed Logins",
    "confirmaton_token_expired"     => "Token has expired, please try to register again.",
    "confirmaton_token_invalid"     => "Invalid token, please verify details are correct or try to register again.",
    "unconfirmed_account"           => "Your account is currently unconfirmed, please check your email for a confirmation link to complete your account registration.",
    "resend_confirmation"           => "<strong><a href=':link'>Click here</a></strong> to be sent a new confirmation email.",
    "resend_confirmation_sent"      => "A new confirmation email has been queued and will be sent to you shortly.",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "must have \":permission\" permission",
    "deleted_user"                  => "Deleted User",
    "access_level_not_owner"        => "It is not possible to change the access level of organisation owners. Transfer organisation ownership to another user first by viewing the organisation and clicking the 'Users' tab.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Select an existing or enter a new organisation...",

);
