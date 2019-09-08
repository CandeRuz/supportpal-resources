<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Error en los requisitos del sistema",

    // Index
    "supportpal_installer"      => "Instalador SupportPal",
    "index_desc"                => "Gracias por escoger SupportPal. Por favor, verifica que el tipo de instalación más abajo es correcto y continúa.",
    "select_language"           => "Selecciona una lengua:",
    "install_type"              => "Tipo de instalación",
    "install"                   => "Instalado reciente",
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
    "file_writeable_desc"       => "Todo lo de abajo debería poder ser editado por el servidor web. Recomendamos utilizar permisos de archivo 755, aunque algunos sistemas puede que requieran 777 si el usuario del servidor web no es el dueño de los archivos. Los directorios deberían ser editables de manera recurrente.",

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
    "step_4_desc"               => "La migración se llevará a cabo en segundo plano y se hará un registro detallado escrito abajo. Esto puede tardar various minutos. Una vez completado, haz click en el botón de continuar que aparecerá.",

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
    "submit_a_ticket"           => "Enviar un ticket",

    /*
     * 2.0.1
     */

    "post_install"              => "Para que el sistema funcione correctamente, se debe configurar un Cron Job. Por favor, lee nuestro <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'>post installation steps</a> para más detalles sobre este tema y otras acciones recomendadas para mejorar la funcionalidad y la seguridad.",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Cumples :required de los :total requisitos necesarios.",
    "optional_requirements"     => "Cumples :optional de los :total requisitos opcionales.",
    "both_requirements"         => "Cumples :required de los :total_required requisitos necesarios y :optional de :total_optional requisitos opcionales.",
    "php_version_is"            => "Tu versión PHP es :version.",
    "enabled"                   => "Habilitado",
    "disabled"                  => "Deshabilitado",
    "php_settings"              => "Ajustes PHP",
    "ipv6_support"              => "Asistencia IPv6",
    "memory_limit"              => ">= 128MB de memoria",
    "memory_limit_error"        => "Tu límite de memoria es ':limit'.",
    "permission_denied"         => "Permiso denegado",
    "writable"                  => "Editable",
    "help_php_version"          => "Para asistencia al instalar una versión nueva de PHP, por favor, contacta con tu proveedor de host o el administrador de servidor.",
    "help_php_extensions"       => "Las extensiones PHP pueden ser diferentes dependiendo de tu servidor, tu host y otras variables del sistema. Para asistencia al instalar missing extensions, por favor, contacta con tu proveedor de host o el administrador de servidor.",
    "help_php_settings"         => "Para asistencia adicional, por favor, lee <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">PHP Settings Help</a>.",
    "disabled_functions"        => "Funciones deshabilitadas",
    "help_mysql_version"        => "Para asistencia al instalar una versión nueva de MySQL, por favor, contacta con tu proveedor de host o el administrador de servidor.",
    "mysql_version"             => "Versión MySQL",
    "mysql_version_not_found"   => "No está disponible, encontrada versión MySQL: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "If your server has IPv6 networking support, please install the php-sockets extension.",
    "email_address_desc"        => "Introduce la principal dirección de correo electrónico de tu compañía. Esta se configurará como la dirección de correo electrónico por defecto y la de tu primer departamento. department. Podrás añadir otras direcciones de correo electrónico más tarde.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube Loaders version :required or greater required. Found: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "Asistencia PNG & JPEG",
    "allow_url_fopen"           => "'allow_url_fopen' Habilitado",
    "allow_url_fopen_failure"   => "Habilitar 'allow_url_fopen' en tu archivo php.ini para usar Gravatar y otras características.",
    "allowed_methods"           => "HTTP Allowed Methods",
    "help_allowed_methods"      => "Your web server must permit all of the below HTTP methods. Please check our <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>New Installation</a> documentation for more information.",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Versión del servidor >= :min",
    "mysql_server_version_desc" => "MySQL :min o más se requieren para ejecutar SupportPal. Found: ':version'.",
    "mysql_client_version"      => "Versión del cliente >= :min (:mysqlnd_min for MySQLnd)",
    "mysql_client_version_desc" => "MySQL versión del cliente :min o más (:mysqlnd_min for MySQLnd) se requieren para ejecutar SupportPal. Found: ':version'.",

    "upgrade_step"              => "Paso :num de :total: ",
    "accept_eula"               => "Aceptar EULA",
    "system_requirements"       => "Requisitos del sistema",
    "update_database"           => "Actualizar base de datos",
    "upgrade_complete"          => "Actualización completada",

    "upgrade_support"           => "Si tuvieras algún problema o necesidad al utilizar las nuevas características de SupportPal, por favor, lee nuestra documentación o abre un ticket con nosotros.",

);
