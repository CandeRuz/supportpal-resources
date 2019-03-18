<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Error en los requisitos del sistema",

    // Index
    "supportpal_installer"      => "Instalador SupportPal",
    "index_desc"                => "Gracias por escoger SupportPal. Por favor, verifica que el tipo de instalación más abajo es correcto y continúa.",
    "select_language"           => "Selecciona una lengua:",
    "install_type"              => "Tipo de instalación",
    "install"                   => "Fresh Install",
    "upgrade"                   => "Actualizar una instalación existente",
    "support"                   => "The license code used for this installation does not have a valid support &amp; upgrades subscription, and as such, it is not eligible to install this version of SupportPal. Please <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renew</a> your support &amp; updates subscription or revert your installation files.",

    // Upgrade
    "successfully_updated"      => "Enhorabuena, SupportPal se ha actualizado con éxito.",

    // Install
    // Step 1
    "step_1"                    => "Paso 1 de 7: Aceptar EULA",
    "step_1_desc"               => "Por favor, lee nuestro contrato de licencia de software más abajo. Al continuar, estarás aceptando el contrato.",
    "i_accept_and_continue"     => "Acepto y continúo",

    // Step 2
    "step_2"                    => "Paso 2 de 7: Requisitos del sistema",
    "not_available"             => "No está disponible",
    "php_version"               => "Versión PHP",
    "php_version_not_found"     => "No está disponible, encontrada versión PHP: :version",
    "php_extensions"            => "Extensiones PHP",
    "file_writeable"            => "Permisos de archivo",
    "file_writeable_desc"       => "All of the below should be writable by the web server. We recommend using 755 file permissions, though some systems may require 777 if the files are not owned by the web server user. Directories should be recursively writable.",

    // Step 3
    "step_3"                    => "Paso 3 de 7: Base de datos",
    "step_3_desc"               => "Por favor, introduce los detalles de la base de datos que has configurado para SupportPal.",
    "hostname"                  => "Nombre de host",
    "port"                      => "Puerto",
    "port_desc"                 => "(Only change if not default port 3306)",
    "database"                  => "Base de datos",
    "database_not_empty"        => "La base de datos no puede contener tablas.",

    // Step 4
    "step_4"                    => "Paso 4 de 7: Crear tablas",
    "step_4_desc"               => "The migration will be performed in the background and a verbose log written below, this may take several minutes. Once complete, please click the continue button that will appear.",

    // Step 5
    "step_5"                    => "Paso 5 de 7: Cuenta del operador",
    "step_5_desc"               => "SupportPal requiere una licencia válida para funcionar. Por favor, introduce una más abajo.",
    "license_desc"              => "La clave de tu licencia de SupportPal tiene 23 caracteres de largo y empieza con SP-",
    "operator_desc"             => "Por favor, crea una cuenta de administrador para el panel del operador introduciendo todos los detalles más abajo.",
    "validating_license"        => "Validando licencia...",

    // Step 6
    "step_6"                    => "Paso 6 de 7: Configuración rápida",
    "step_6_desc"               => "Introduce los detalles de tu compañía y sitio web más abajo.",
    "locale_desc"               => "Establece los ajustes de localización para tu sistema.",
    "operator_success"          => "Tu cuenta de administrador ha sido creada.",

    // Step 7
    "step_7"                    => "Paso 7 de 7: ¡Instalado!",
    "successfully_installed"    => "Enhorabuena, SupportPal se ha instalado con éxito.",
    "operator_panel"            => "Panel del operador",
    "help_desc"                 => "Si necesitaras alguna ayuda para configurar o utilizar SupportPal, tenemos dos fuentes principales de información:",
    "submit_a_ticket"           => "Submit a Ticket",

    /*
     * 2.0.1
     */

    "post_install"              => "For the system to function properly, a cron job must be set-up. Please read our <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'>post installation steps</a> for details on this and other recommend actions to improve functionality and security.",

    /*
     * 2.0.2
     */
    "required_requirements"     => "You meet :required of :total required requirements.",
    "optional_requirements"     => "You meet :optional of :total optional requirements.",
    "both_requirements"         => "You meet :required of :total_required required requirements and :optional of :total_optional optional requirements.",
    "php_version_is"            => "Your PHP Version is :version.",
    "enabled"                   => "Enabled",
    "disabled"                  => "Disabled",
    "php_settings"              => "PHP Settings",
    "ipv6_support"              => "IPv6 Support",
    "memory_limit"              => ">= 128MB Memory",
    "memory_limit_error"        => "Your memory limit is ':limit'.",
    "permission_denied"         => "Permission Denied",
    "writable"                  => "Writable",
    "help_php_version"          => "For assistance installing a new version of PHP please contact your hosting provider or server administrator.",
    "help_php_extensions"       => "PHP extensions differ depending on your server, your host and other system variable. For assistance installing missing extensions, please contact your hosting provider or server administrator.",
    "help_php_settings"         => "For additional assistance, please read <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">PHP Settings Help</a>.",
    "disabled_functions"        => "Disabled Functions",
    "help_mysql_version"        => "For assistance installing a new version of MySQL please contact your hosting provider or server administrator.",
    "mysql_version"             => "MySQL Version",
    "mysql_version_not_found"   => "Not available, found MySQL version: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "If your server has IPv6 networking support, please install the php-sockets extension.",
    "email_address_desc"        => "Enter your main company email address, this will be set up as the default sending email address and the email address on your first department. You will be able to add other email addresses later.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube Loaders version :required or greater required. Found: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "PNG & JPEG Support",
    "allow_url_fopen"           => "'allow_url_fopen' Enabled",
    "allow_url_fopen_failure"   => "Enable 'allow_url_fopen' in your php.ini file to use Gravatar and other features.",
    "allowed_methods"           => "HTTP Allowed Methods",
    "help_allowed_methods"      => "Your web server must permit all of the below HTTP methods. Please check our <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>New Installation</a> documentation for more information.",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Server Version >= :min",
    "mysql_server_version_desc" => "MySQL :min or greater is required to run SupportPal. Found: ':version'.",
    "mysql_client_version"      => "Client Version >= :min (:mysqlnd_min for MySQLnd)",
    "mysql_client_version_desc" => "MySQL client version :min or greater (:mysqlnd_min for MySQLnd) is required to run SupportPal. Found: ':version'.",

    "upgrade_step"              => "Step :num of :total: ",
    "accept_eula"               => "Accept EULA",
    "system_requirements"       => "System Requirements",
    "update_database"           => "Update Database",
    "upgrade_complete"          => "Upgrade Complete",

    "upgrade_support"           => "Should you find any problems or need any help using the new features in SupportPal, please read our documentation or open a ticket with us.",

);
