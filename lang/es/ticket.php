<?php

return array(

    "feedback_question"         => "Preguntas que mostrar al usuario.",
    "open_new"                  => "Abrir nuevo Ticket",
    "select_department"         => "Seleccionar un departamento",
    "select_department_desc"    => "Por favor, selecciona el departamento relevante para tu incidencia.",
    "no_departments"            => "No se han encontrado departamentos.",
    "department_user_details"   => "Detalles del departamento y el usuario",
    "enter_your_details"        => "Introduce tus datos",
    "enter_ticket_details"      => "introducir datos",
    "enter_subject_message"     => "Introducir asunto y mensaje",
    "invalid_user"              => "Por favor, asegúrate que los datos del usuario que has introducido sean válidos para continuar.",

    "registered_users"          => "Solo usuarios registrados",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Asunto",
    "no_subject"                => "Sin asunto",
    "last_action"               => "Última acción",
    "due_time"                  => "Hora de entrega",
    "created_time"              => "Hora de creación",
    "submitted"                 => "Enviado",
    "add_reply"                 => "Añadir respuesta",
    "ticket_reply"              => "Respuesta del ticket",
    "ticket_note"               => "Nota del ticket",
    "ticket_type"               => "Tipo de ticket",

    "user_ticket"               => "Usuario del Ticket",
    "user_ticket_desc"          => "Abrir nuevo ticket en nombre de un usuario nuevo o existente.",
    "existing_user"             => "Usuario existente",
    "new_user"                  => "Usuario nuevo",
    "internal"                  => "Interno",
    "internal_ticket_desc"      => "Abrir un ticket solo para uso interno. Este ticket se te asociará a ti en vez de a un usuario.",
    "ticket_opened"             => "Tu ticket se ha abierto con éxito.",
    "enter_user_details"        => "Por favor, introduce tus datos o inicia sesión con tu cuenta si ya tienes una.",
    "already_have_account"      => "Si ya tienes una cuenta, por favor inicia sesión y abre el ticket. Utiliza la opción olvidar contraseña si no puedes recordarla.",

    "recent_tickets"            => "Tickets recientes",
    "last_message_text"         => "Texto del último mensaje",

    "set_due_time"              => "Establecer una hora de entrega",

    "settings"                  => "Ajustes del Ticket",

    "priority"                  => "Prioridad|Prioridades",

    "channel"                   => "Canal|Canales",
    "account"                   => "Cuenta|Cuentas",

    "assign_operator"           => "Asignar operador",
    "assigned_operator"         => "Operadores asignados",
    "assigned_to"               => "Asignado a",
    "assigned"                  => "Asignado",

    "department"                => "Departamento|Departamentos",
    "change_department_order"   => "Arrastra las filas para cambiar el orden en el que los departamentos se muestran a los usuarios cuando se abre un nuevo ticket.",
    "department_applicable"     => "Applicable Departments",
    "department_applicable_desc" => "Los departamentos en los que los usuarios podrán seleccionar la prioridad. Solo se aplica en el frontend. Todas las prioridades estarán disponbiles para los operadores para todos los departamentos.",

    "due_to_be_sent"            => "Pendiente de ser enviado",
    "send_now"                  => "Enviar ahora",

    "tag"                       => "Etiqueta|Etiquetas",

    "track_ticket"              => "Comprobar el estado del Ticket",
    "view_ticket"               => "Ver Ticket",

    // Recent activity
    "recent_activity"           => "Actividad reciente",
    "no_recent_activity"        => "No hay actividad reciente",

    // Active operators
    "active_operators"          => "Operadores activos",

    "ticket_number"             => "Número del ticket",
    "ticket_format"             => "Formato del número del ticket",

    // Departments
    "department_public_desc"    => "Si el departamento es visible para los usuarios en la web help desk.",
    "department_parent_desc"    => "Si el departamento es un subdepartamento, por favor, selecciona uno principal. Los subdepartamentos están pensados para escalación y administración internas, por lo que al establecer esto se eliminarán algunas de las opciones más abajo.",
    "department_priority"       => "Prioridades del departamento",
    "department_priority_desc"  => "Las prioridades que estarán disponibles para los usuarios cuando abran un ticket en este departamento. Se debe seleccionar al menos una. Por defecto, todas las prioridades estarán disponibles en el departamento.",
    "department_no_format"      => "Opcional. Establécelo solo para reemplazar el formato del número del ticket por defecto. Si no, déjalo en blanco.",
    "department_operator"       => "Operadores del departamento",
    "department_default_assign" => "Asignado por defecto a",
    "dept_default_assign_desc"  => "Usa esto si quieres que los tickets que están abiertos en este departamento se asignen automáticamente a uno o más operadores.",

    // Department emails
    "email_accounts_desc"       => "Configura direcciones de correo electrónico para el departamento. Cualquier correo que reciban estas direcciones abrirán tickets en este departamento. La primera dirección de correo se utiliza como la dirección de remitente por defecto para correo saliente.",
    "department_password"       => "Solo introduce una contraseña para reemplazar contraseñas guardadas existentes o para validar datos de las cuentas de correo.",
    "department_port"           => "Default values are: 110 for POP3, 995 for secure POP3, 143 for IMAP, and 993 for secure IMAP. Leave blank to use the default value.",
    "department_encryption"     => "Algunos proveedores de correo electrónico requieren cifrado SSL o TLS para conectarse. Si no estás seguro, deja este ajuste como Ninguno/a.",
    "department_delete_mail"    => "Si utilizas IMAP, puedes elegir no eliminar correos en el servidor después de que hayan sido importados como tickets.",
    "protocol"                  => "Protocolo",
    "server"                    => "Servidor de correo",
    "port"                      => "Puerto",
    "username"                  => "Nombre de usuario",
    "password"                  => "Contraseña",
    "encryption"                => "Cifrado",
    "delete_downloaded"         => "Eliminar correos descargados",
    "consume_all"               => "Consumir todo el correo",
    "email_download"            => "Descarga de correos",
    "email_piping"              => "Canalización de correos",
    "email_piping_desc"         => "Configura un reenviador de correos como el siguiente. La ruta de acceso ejecutable PHP puede ser diferente en tu servidor.",
    "remote_email_piping"       => "Canalización de correos remota",

    // Department email options
    "email_options"             => "Opciones de correos",
    "email_user_on_email"       => "Mandar correo a los usuarios de tickets abiertos por correo",
    "email_user_on_email_desc"  => "Selecciona si se debería notificar por correo a cuando envíen un correo que resulte en la apertura de un nuevo ticket.",
    "email_operators"           => "Notificar operadores",
    "email_operators_desc"      => "Selecciona si quieres reenviar las respuestas del operador a otros operadores. Por defecto, se marca la opción \"enviar correo a los operadores\" en el panel del operador, y se enviará automáticamente un correo de respuestas de los operadores.",
    // Department email templates
    "new_ticket_opened"         => "Nuevo ticket abierto",
    "reply_to_locked"           => "Responder al ticket bloqueado",
    "waiting_for_response"      => "Esperando una respuesta",
    "ticket_auto_closed"        => "Ticket Auto Closed",
    "closed_by_operator"        => "Cerrado por el operador",

    // Feedback
    "feedback"                  => "Valoración",
    "feedback_form"             => "Formulario de valoración|Formularios de valoración",
    "feedback_form_desc"        => "Los formularios de valoración son procesados en el orden en el que aparecen. Arrastra las filas para reorganizar y ajustar la prioridad de los formularios de valoración.",
    "view_feedback"             => "Ver valoración",
    "ticket_feedback"           => "Valoración del ticket",
    "feedback_fields_error"     => "Ha ocurrido un problema intentando obtener los campos de valoración.",
    "time_after_resolved"       => "Tiempo una vez resuelto",
    "time_after_resolved_desc"  => "El tiempo que transcurre después de que un ticket se haya marcado como resuelto para que el formulario de valoración se envíe al usuario.",
    "expires_after"             => "Expira después de",
    "expires_after_desc"        => "El tiempo que transcurre para que un formulario de valoración que ha expirado no se pueda contestar. Aunque nosotros recomendemos establecer 7 días, puedes introducir 0 en todos los campos para no establecer ninguna hora de expiración.",
    "form_conditions"           => "Condiciones del formulario",
    "form_conditions_desc"      => "Define las condiciones del ticket por las que los tickets nuevos resueltos se comprueban para ver si cumplen con este formulario. Si un ticket resuelto cumple con varios formularios se seleccionará en la prioridad del formulario, lo cual se puede modificar a través de la lista de formularios y reorganizándolo.",
    "form_fields"               => "Campos de formulario",
    "response_rate"             => "Índice de respuesta",
    "sent_forms"                => "Sent Feedback Forms",
    "rating"                    => "Valoraciones",
    "good_ratings"              => "Buenas valoraciones",
    "bad_ratings"               => "Malas valoraciones",
    "customer_satisfaction"     => "Satisfacción del cliente",
    "feedback_desc"             => "Gracias por contactar con nosotros y esperamos haber resuelto tu consulta. Por favor, ¿podrías valorar tu experiencia?.",
    "good_satisfied"            => "Buena, estoy satisfecho/a",
    "bad_not_satisfied"         => "Mala, no estoy satisfecho/a",
    "feedback_not_found"        => "Tu valoración no ha podido ser aceptada. Por favor, abre un ticket con nosotros si quieres compartir tu valoración.",
    "feedback_malformed_token"  => "Tu valoración no ha podido ser aceptada por un problema de con el formato del token. Por favor, abre un ticket con nosotros si quieres compartir tu valoración.",
    "feedback_already_done"     => "Ya has ofrecido una valoración para este ticket. Gracias.",
    "feedback_expired"          => "El ticket lleva un tiempo resuelto y, por desgracia, ya no se puede valorar.",
    "feedback_questions"        => "Si tienes unos minutos, por favor, ¿te importaría contestar a las siguientes preguntas para ayudarnos a mejorar la asistencia que ofrecemos?.",
    "feedback_thank_you"        => "Gracias por ofrecernos tu valoración de este ticket.",
    "feedback_for_ticket"       => "Valoración para el Ticket #:number",
    "feedback_rating_desc"      => "La asistencia recibida en este ticket se ha valorado como <strong>:rating</strong> por el usuario.",

    // Custom fields
    "customfield"               => "Campo personalizado del ticket|Campos personalizados del ticket",
    "customfield_order"         => "Arrastra las filas para cambiar el orden en el que se muestran los campos personalizados a los usuarios al abrir los tickets a través de la web.",

    // Canned responses
    "cannedresponse"            => "Respuesta predefinida|Respuestas predefinidas",

    // Filters
    "filter"                    => "Filtro|Filtros",
    "filter_condition"          => "Condiciones de filtro",
    "filter_condition_desc"     => "Define the ticket conditions for which tickets are listed under this filter.",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_type"                => "Tipo de macro",
    "macro_type_desc"           => "By default the macro has to be manually called in the ticket view. It can be set to be an automatic macro that is checked and actioned when new tickets come in or on all tickets via a scheduled task, in either case the conditions will be checked and if true then the actions will be performed automatically. A macro can only run once on a ticket automatically, there is no limit for running it manually.",
    "macro_condition"           => "Condiciones del macro",
    "macro_action"              => "Acciones del macro",
    "macro_action_desc"         => "Define las acciones que se llevarán a cabo cuando un macro se ejecute. Por favor, asegúrate de que las acciones son válidas para el departamento en el que se encuentra el ticket, ya que de lo contrario no tendrán ningún efecto.",

    "from"                      => "De",
    "to"                        => "Para",
    "cc"                        => "CC",
    "cc_desc"                   => "Puedes añadir gente en CC en este ticket al introducir sus correos electrónicos arriba.",

    "allowed_files"             => "Tipos de archivos adjuntos permitidos",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> también está viendo el ticket.",
    "draft_saved"               => "Borrador guardado a las :time",
    "save_draft"                => "Guardar borrador",
    "discard_draft"             => "Descartar borrador",

    // Locked
    "error_ticket_locked"       => "Este ticket se ha bloqueado y no se puede actualizar de nuevo. Por favor, abre un ticket nuevo si necesitas más asistencia.",

    // Ticket Followups
    "follow_up"                 => "Seguimiento",
    "follow_up_status_desc"     => "Establece el ticket con un estado diferente hasta la fecha del seguimiento.",
    "exact_date_time"           => "Fecha & hora exacta",
    "time_from_now"             => "Tiempo desde ahora",

    // Schedule
    "schedule"                  => "Horario|Horarios",
    "business_hour"             => "Horario comercial",
    "business_hour_desc"        => "El horario comercial indica las horas en las que el personal está disponible para responder consultas por el horario. Las horas se tienen en cuenta cuando se calculan las horas de entrega del ticket.",

    // Holidays
    "holiday"                   => "Holiday|Holidays",
    "holiday_or_on_the"         => "or, on the",
    "holiday_month_year_desc"   => "El año es opcional si las vacaciones son recurrentes. Selecciona un año solo si las vacaciones ocurren en esta fecha en un año en particular.",

    // SLA Plans
    "sla_plan"                  => "Plan SLA|Planes SLA",
    "specific_schedule"         => "Horarios específicos",
    "calendar_hours_24"         => "Horas del calendario (24 Horas)",
    "resolution_time"           => "Horaas de resolución",
    "resolution_time_desc"      => "Establece unas horas límite para las que un ticket debe sido respondido y resuelto por prioridad. El tiempo solo se contará durante las horas comerciales basadas en los schedule(S) elegidos. Se pueden utilizar valores decimales.",
    "reply_within"              => "Responder en",
    "resolve_within"            => "Resolver en",
    "plan"                      => "Plan",
    "sla_condition"             => "Condiciones SLA",
    "sla_condition_desc"        => "Define las condiciones del ticket por las que los tickets nuevos se comprueban para ver si cumplen con este plan. Si un nuevo ticket cumple con varios planes SLA, se seleccionará en la prioridad del plan, lo cual se puede modificar a través de una lista de planes y reorganizándolo.",
    "escalation_rule"           => "Escalation Rules",
    "escalation_rule_desc"      => "Define acciones que se llevan a cabo cuando un ticket bajo este plan SLA está cerca de la fecha de vencimiento o está vencido. Por favor, asegúrate de que las reglas son válidas para el departamento en el que se encuentra el ticket, ya que de lo contrario no tendrán ningún efecto.",
    "condition"                 => "Condición",
    "condition_group"           => "Condiciones del grupo",
    "all_groups"                => "ALL groups must be true",
    "any_group"                 => "ANY group can be true",
    "all_conditions"            => "ALL conditions in group must be true",
    "any_condition"             => "ANY condition in group can be true",
    "sla_plan_desc"             => "Los planes SLA son procesados en el orden en el que aparecen. Arrastra las filas para reorganizar y ajustar la prioridad de los planes SLA.",

    // Reply options
    "reply_options"             => "Opciones de respuesta",
    "send_email_to_users"       => "Enviar correo a el/los usuario(s)",
    "send_email_to_operators"   => "Enviar correo a el/los operador(es)",
    "back_to_grid"              => "Volver a la cuadrícula de los tickets",
    "take"                      => "Take",
    "take_ownership"            => "Take Ownership",
    "pause_duetime"             => "Pausar la hora de entrega",
    "add_to_canned_responses"   => "Añadir a respuestas predefinidas",
    "visible_to_all_operators"  => "Hacer visible a todos los operadores",
    "set_status"                => "Establecer estado",
    "add_selfservice_link"      => "Añadir link auto-servicio",
    "search_selfservice"        => "Buscar artículo auto-servicio",
    "search_canned"             => "Buscar respuesta predefinida",

    "mark_resolved"             => "Marcar como Resuelto",

    "ticket_signature"          => "Firma del ticket",

    "default_open_status"       => "Default Open Status",

    "default_resolve_status"    => "Default Resolved Status",
    "default_resolve_status_desc" => "Selecciona el estado por defecto que se utiliza para los tickets que se han resuelto.",

    "waiting_response_time"      => "Esperando una respuesta de correo",
    "waiting_response_time_desc" => "El tiempo que transcurre hasta que los usuarios reciben un correo de tickets inactivos, preguntándoles si consideran que el ticket se ha resuelto. Establécelo a 0 para desactivar este correo.",

    "close_inactive_tickets"    => "Cerrar tickets inactivos",
    "close_inactive_tickets_desc" => "El tiempo que transcurre hasta que los tickets inactivos se cierran automáticamente. Establécelo a 0 para no cerrar nunca los tickets automáticamente.",

    "ticket_reply_order"        => "Orden de respuestas del ticket",
    "ticket_reply_order_desc"   => "Selecciona el orden en el que se muestran los mensajes del ticket, ascendiente, en el que el mensaje más reciente es el último, o descendiente, en el que el mensaje más reciente es el primero.",

    "ticket_notes_position"     => "Posición de las notas del ticket",
    "ticket_notes_position_desc" => "Selecciona dónde se mostrarán las notas del ticket en la vista del ticket.",
    "ticket_notes_top_messages" => "En la parte superior y en mensajes",
    "ticket_notes_top"          => "Solo en la parte superior",
    "ticket_notes_messages"     => "Solo en mensajes",

    "captcha_desc"              => "Cuando el captcha debería mostrarse a los usuarios abriendo nuevos tickets.",
    "unregistered_only"         => "Solo usuarios no registrados",

    "allow_unauth_users"        => "Permitir usuarios sin autenticar",
    "allow_unauth_users_desc"   => "Permite a los usuarios que no están registrados ver y responder a tickets. Si deshabilitas esto, también se eliminará la opción de comprobar el estado del ticket y los usuarios tendrán que estar registrados e iniciar sesión antes de poder acceder a los tickets.",

    "default_department"        => "Departamento por defecto",
    "default_department_desc"   => "El departamento por defecto establecido en todos los tickets entrantes a través de este canal.",

    "show_related_articles"     => "Mostrar artículos relacionados",
    "show_related_articles_desc" => "Cuando el usuario está escribiendo el asunto, puede que se muestren artículos relacionados basados en lo que se ha introducido. Es necesario que la sección de auto-servicio esté habilitada y MySQL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Prioridad por defecto",
    "default_priority_desc"     => "La prioridad por defecto establecida en todos los tickets entrantes a través de este canal.",
    "verbose_email_log"         => "Verbose Email Log",

    "adjust_columns"            => "Ajustar columnas",
    "last_reply"                => "Última respuesta",
    "opened_at"                 => "Abierto a",

    "change_department"         => "Cambiar departamento",
    "change_status"             => "Cambiar estado",
    "no_statuses"               => "No se han encontrado estados. Haz click en <a href=':route'>here</a> para crear uno.",
    "no_priorities"             => "No se han encontrado prioridades. Haz click en <a href=':route'>here</a> para crear una.",
    "no_templates"              => "No custom email templates found. Click <a href=':route'>here</a> to create one.",
    "no_tags"                   => "No se han encontrado etiquetas del ticket. Haz click en <a href=':route'>here</a> para crear una.",
    "no_departments_found"      => "No se han encontrado departamentos. Haz click en <a href=':route'>here</a> para crear uno.",
    "no_operators_found"        => "No se han encontrado operadores. Haz click en <a href=':route'>here</a> para crear uno.",
    "change_priority"           => "Cambiar prioridad",
    "add_tag"                   => "Añadir etiqueta",

    "unlock"                    => "Desbloquear",
    "merge"                     => "Combinar",
    "merged"                    => "Combinados",
    "unmerge"                   => "Descombinar",
    "close_and_lock"            => "Cerrar & Bloquear",
    "delete_and_block"          => "Eliminar & Bloquear",

    "block_warning"             => "El correo del usuario también se bloqueará y no podrá abrir tickets.",

    "mass_reply"                => "Mass Reply",

    "due_today"                 => "Pendiente para hoy",
    "overdue"                   => "Vencido",
    "unassigned"                => "Desasignado",

    "pause_duetime_desc"        => "Si hay un plan SLA activo en este ticket, pausa la hora de entrega  If there is an active SLA plan on this ticket, pause the remaining due time until after the follow up date. The due time will only start again once a reply or note has been added to the ticket (including from the follow up).",
    "delete_follow_up"          => "Eliminar seguimiento",

    "add_cc"                    => "Añadir CC",
    "reply_above_line"          => "Por favor, responde por encima de esta línea",

    "email_settings"            => "Ajustes de correo",
    "web_settings"              => "Ajustes de Web",
    "split_selected_replies"    => "Dividir respuestas seleccionadas",

    "track_ticket_not_found"    => "No se ha podido encontrar el ticket con ese número y dirección de correo electrónico.",

    "channel_deactivated"       => "El canal del ticket está actualmente desactivado. No se ha podido publicar la respuesta.",

    "type_in_tags"              => "Type in tags",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Una lista de extensiones de arcivo, separados por la barra vertical | que se permiten como archivos adjuntos. Por ejemplo: txt|png|jpg. Para permitir todos los archivos adjuntos, introduce: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "No se han encontrado grupos de operadores. Haz click en <a href=':route'>here</a> para crear uno.",
    "no_user_groups"            => "No se han encontrado grupos de usuarios. Haz click en <a href=':route'>here</a> para crear uno.",
    "opened_by"                 => "(Abierto por :name)",
    "remote_email_piping_desc"  => "Download the <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>remote email piping script</a> and follow the <a href='https://docs.supportpal.com/current/Remote+Email+Piping' target='_blank'>documentation</a> on configuring it on your mail server.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Por defecto, SupportPal tiene asistencia de alias de correo electrónico y comprobará el destinatario de los correos entrantes para ver en qué departamento debería abrirse el ticket. El ticket no se abre si no se encuentra el departamento correspondiente. Al habilitar este ajuste, todos los correos sin una dirección de correo de departamento correspondiente se importarán como tickets en este departamento.",
    "default_reply_options"     => "Opciones de respuesta por defecto",
    "default_reply_options_desc" => "Selecciona las opciones de respuesta por defecto que se establezcan cuando se abra o se responda a un ticket. La opción ':reply_option' option will be ticked based on the ':department_option' department setting.",
    "associate_response_tag"    => "Asociar respuesta predefinida con una etiqueta...",
    "canned_response_tags_desc" => "Añadir etiquetas que puedan ayudar a encontrar una respuesta predefinida cuando se conteste a un ticket.",
    "loading_tags"              => "Cargando etiquetas",
    "append_ip_address"         => "Anexar dirección IP",
    "append_ip_address_desc"    => "Anexar la dirección IP de los usuarios a sus mensajes cuando estén abriendo y respondiendo a tickets del frontend.",
    "unassign_operator"         => "Desasignar operador",
    "remove_tag"                => "Eliminar etiqueta",
    "message_clipped"           => "[Mensaje acortado]",
    "view_entire_message"       => "Ver todo el mensaje",
    "no_custom_fields"          => "No se han encontrado campos personalizados. Haz click en <a href=':route'>here</a> para crear uno.",
    "follow_up_active"          => "Un <a class='view-followup' style='text-decoration: underline;'>seguimiento</a> está actualmente activo en este ticket y se ejecutará <strong>:time</strong>.",
    "disable_user_email_replies" => "Deshabilitar respuestas de correo del usuario",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Filtro de ticket por defecto",
    "default_ticket_filter_desc" => "El filtro de ticket que se utiliza por defecto al hacer click en el link 'Administrar Tickets'. Se puede establecer a 'Ninguno/a', la opción por defecto, que mostrará todos los tickets sin resolver.",
    "recent_filters"            => "Filtros recientes",
    "inactive_tickets"          => "Tickets inactivos",
    "default_open_status_desc"  => "Selecciona el estado por defecto que se debe establecer automáticamente cuando un usuario abre un ticket nuevo o responde a un ticket sin la respuesta de un operador.",
    "default_reply_status"      => "Estado de la respuesta por defecto",
    "default_reply_status_desc" => "Selecciona el estado por defecto que se debe establecer automáticamente cuando un usuario responde a un ticket. Solo se aplica si un operador ya ha respondido al ticket.",
    "drafting_reply"            => "<strong>:name</strong> comenzó a hacer un borrador :type :time:",
    "ticket_reply_order_default" => "el sisetma por defecto utilizará el valor que esté actualmente seleccionado en los ajustes generales del ticket.",
    "select_a_parent"           => "Selecciona un departamento principal...",
    "select_a_department"       => "Selecciona un departamento...",
    "department_operator_desc"  => "También puedes asignar operadores individuales al departamento. Estos operadores se añadirán además de los grupos asignados arriba.",
    "department_group"          => "Grupos de departamento",
    "department_group_desc"     => "Puedes asignar grupos de operadores completos al departamento, lo cual es recomendable si tu lista de operadores es grande y/o cambia con frecuencia.",
    "ticket_other_brands"       => "Tickets en otras marcas",
    "add_for_department"        => "Add for department...",
    "record_order"              => "Arrastra las filas para cambiar el orden de los registros.",
    "ticket_token"              => "Token del Ticket",
    "reply_all"                 => "Responder a todo",
    "reply_without_cc"          => "Responder (sin CC)",
    "open_new_for_user"         => "Abrir nuevo ticket para el usuario",
    "email_accounts"            => "Cuentas de correo",
    "add_another_email"         => "Añadir otra dirección de correo",
    "follow_up_date"            => "Fecha de seguimiento",
    "post_reply"                => "Publicar respuesta",
    "post_note"                 => "Publicar nota",
    "ticket_details"            => "Detalles del ticket",
    "organisation_tickets"      => "Tickets de la organización",
    "manage_tickets"            => "Administrar Tickets",
    "via_channel"               => "a través de :channel",
    "department_parent"         => "Departamento principal",
    "department_brands"         => "Department Brands",
    "email_item"                => "Correo :item",
    "from_name"                 => "From Name",
    "from_address"              => "From Address",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user at :date",
    "prioritise_reply-to"       => "Prioritise Reply-To",
    "prioritise_reply-to_desc"  => "Toggle to prioritise the Reply-To header over the From header. If enabled, tickets opened via email will be opened on behalf of the Reply-To name and address.",
    "note_options"              => "Note Options",
    "escalation_rules_desc"     => "The below SLA plan escalation rules are scheduled to run after the times listed. These times may change or the rules may be removed if an operator replies to this ticket.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Usuario no registrado. Los ajustes de canales de correo están establecidos para solo importar correos de usuarios registrados.",
    "display_name"              => "Nombre de correo que se muestra",
    "display_name_desc"         => "Opcional. Establécelo solo para reemplazar el nombre que se muestra usado en correos salientes desde este departamento. Si no, déjalo en blanco.",
    "display_name_options"      => "The following Twig variables may be used:<br >{{ brand.name }} - Brand name<br />{{ department.name }} - Department Name<br />{{ department.frontend_name }} - Shows the parent department name, if ticket belongs to a sub-department.<br />{{ operator.formatted_name }} - Operator Name<br /><em>The operator name won't always be available, so wrap it in a 'not empty' conditional i.e. {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Archivo adjunto rechazado",
    "enable_subaddresses"       => "Habilitar sub-direcciones",
    "enable_subaddresses_desc"  => "Toggle to enable using email sub-addressing for all departments. This will create a unique sub-address for each ticket that is set as the Reply-To address on all outgoing email. Your mail server must be able to handle sub-addressing, additional steps may be required if you are using email piping to ensure emails to these addresses are forwarded correctly. Enabling this will allow you to remove the ticket number from the subject of email templates.",
    "email_replies_disabled"    => "Respuestas de correo desactivadas",
    "disable_user_email_replies_desc" => "Enable to block email replies from users, and also remove the reply clipping line from outbound ticket emails. By default, the email will be silently ignored, but you can set an email to be sent to the user by changing the selected email template for the 'Email Replies Disabled' option below.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Asignado al ticket",
    "user_ticket_reply"         => "Respuesta de usuario del ticket",
    "new_internal_ticket"       => "Nuevo ticket interno",
    "department_changed"        => "Departamento cambiado",
    "operator_ticket_reply"     => "Respuesta de operador del ticket",
    "new_ticket_note"           => "Nueva nota del ticket",
    "email_template_desc"       => "Puedes seleccionar una plantilla de correo diferente a la de por defecto para enviar a usuarios o operadores para cualquiera de las acciones más abajo. Esta plantilla se convertirá en la de por defecto solo para este departamento.",
    "create_new_user"           => "Crear nuevo usuario",
    "convert_user_ticket_desc"  => "El ticket se convertirá de ticket interno a ticket de usuario.",
    "user_reply_internal_ticket" => "No es un operador. Solo los operadores pueden responder a ticket internos.",
    "enter_email_address"       => "Introducir dirección de correo...",
    "email_user_frontend"       => "Email Users on Tickets Opened at Frontend",
    "email_user_frontend_desc"  => "Selecciona si se debería notificar a los usuarios por correo cuando ellos mismos abren un ticket en el frontend.",
    "department_template_disabled" => "La plantilla de correo del departamento relevante está desactivada, por lo que no se puede enviar este correo.",
    "verbose_email_log_desc"    => "If email collection should be logged on file, recommended to keep disabled unless instructed by support for debugging. Five days worth of logs are stored, older log files will be purged automatically by the system.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Abrir nuevo ticket en nombre de un usuario existente.",
    "canned_response_tag"       => "Etiqueta de respuestas predefinidas|Etiquetas de respuestas predefinidas",
    "response"                  => "Respuesta|Respuestas",
    "response_desc"             => "La respuesta predefinida se puede escribir en varias lenguas. La respuesta adecuada se utilizará automáticamente basada en la preferencia de lenguas del usuario.",
    "no_slaplans"               => "No se han encontrado planes SLA. Haz click en <a href=':route'>here</a> para crear uno.",
    "filter_performance"        => "Performance considerations and recommendations",
    "filter_performance_desc"   => "<li>Filters that match more tickets will be slower, in most cases try to exclude resolved tickets.</li><li>Filters using 'is not' conditions will usually be slower than using 'is' conditions.</li><li>Filters checking for NULL values (e.g. Ticket tag is None) will be slower.</li><li>Avoid multiple conditions that involve checking strings/words as they introduce more complexity.</li><li>Filters using 'begins with' or 'contains' conditions will generally be slower than using 'equals' or 'ends with' conditions.</li><li>Resolved tickets are excluded from the counts shown in the sidebar.</li>",
    "run_macro"                 => "Ejecutar Macro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Toggle to only show the department to logged in users and only accept emails from users actively registered in the help desk. If enabled, a bounce back email will be sent to unregistered users who email this department, to change or disable the email please see the 'Registered Users Only' template option below.",
    "form_fields_desc"          => "If you'd like to collect additional information when the user provides their feedback, you may set up custom fields to show on the form here. The field type will be locked once the form has been completed by a user.",
    "feedback_ratings"          => "Valoración de la Satisfacción del Cliente (que afecta a tu puntuación de Satisfacción del Cliente)",
    "email_and_other_accounts"  => "Email and other channel accounts",
    "delete_message"            => "Eliminar mensaje",
    "linked_tickets"            => "Tickets vinculados",
    "add_linked_ticket"         => "Añadir ticket vinculado",
    "add_linked_ticket_desc"    => "Buscar por número de ticket o asunto:",
    "create_linked_ticket"      => "Crear ticket vinculado",
    "copy_link"                 => "Copiar link",
    "forward_message"           => "Reenviar este mensaje",
    "forward_from_here"         => "Reenviar ticket desde aquí",
    "forward"                   => "Reenviar",
    "forward_options"           => "Opciones de reenvío",
    "forwarded_to"              => "Reenviado a",
    "new_operator_reply"        => "Nueva respuesta del operador",
    "new_user_reply"            => "Nueva respuesta del usuario",
    "add_bcc"                   => "Añadir BCC",
    "at_least_one_recipient"    => "Por favor, indica al menos un destinatario.",
    "forwarded_message"         => "---------- Forwarded message ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Note: solo afecta a los tickets que tienen un estado en el que la opción 'Cerrar tickets inactivos' está habilitada.",
    "close_inactive_status_desc" => "Toggle to enable/disable automatic closure of inactive tickets and inactivity email reminders ('Waiting For Response' and 'Ticket Auto Closed' templates). If enabled, the time before reminders are sent can be configured via the ticket general settings.",
    "from_header_missing"       => "From: header missing from email.",
    "move_ticket"               => "Mover Ticket",
    "move_ticket_step1"         => "Paso 1: Elige una marca nueva a donde mover el ticket",
    "move_ticket_step2"         => "Paso 2: Elige un departameno Choose a department from new brand",
    "current_record"            => "Current :record",
    "new_record"                => "Nuevo :record",
    "department_email"          => "Department Email",
    "select_a_department_email" => "Select a department email...",
    "record_public_desc"        => "Toggle to only let the :record be accessible by yourself.",
    "record_group_desc"         => "If you wish to make the :record visible to only certain operator groups, leave blank to make visible to all operators.",
    "ticket_format_desc"        => "Can contain alphanumeric characters and special characters <code>-_.+!*,</code><br />The following variables may also be used: %S for a sequential number | %N for a random number | %L for a random letter<br />Use {number} to repeat <strong>only</strong> after %N or %L, e.g. %N{4} equates to 4 random numbers, %L{3} equates to 3 random letters<br />The following <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a> Parameters prefixed with % Y,y,m,d,j,g,G,h,H,i,s",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Toggle to disable the macro and prevent it from running automatically or showing in the ticket interface.",
    "macro_order_drag"          => "Drag the rows to change the order of the macros.",
    "macro_order_processed"     => ":type macros are processed in the order they appear.",
    "macro_type"                => "Macro Type",
    "macro_type_desc"           => "There are three types of macros available. Manual macros can only be ran from the ticket view or grid, automatic macros run on non-resolved tickets every hour, and hook macros run on specified ticket events. Automatic and hook macros can also be set to only run within specific schedules. Any hook macro actions won't trigger other hook macros to avoid the risk of loops.",
    "macro_run_at_most"         => "Run At Most",
    "macro_run_times"           => "times", // As in '5 times'
    "macro_run_at_most_desc"    => "Limit how many times an automatic macro can run on a single ticket, leave blank to let it run an unlimited number of times.",
    "macro_events_desc"         => "Select one or more events that the macro should run on. The conditions set below will be checked before the macro runs.",
    "macro_schedules_desc"      => "By default the macro will run 24/7, but you can select one or more help desk schedules so the macro is only active during those times.",
    "macro_condition_desc"      => "Define the conditions for which tickets this macro will be available to. By default, with no conditions, it will apply to all tickets. At least one condition must be defined for automatic macros.",
    "add_remove_headers"        => "Add/Remove Headers",
    "webhook_merge_fields"      => "Merge fields can be used in the URL and content field, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">learn more</a>.",
    "webhook_ticket_required"   => "A ticket must exist for this functionality to work.",
    "not_permitted"             => "Sorry, you're not permitted to view the requested ticket(s). If you think this has been shown in error, please contact your administrator.",
    "watch"                     => "Watch",
    "unwatch"                   => "Unwatch",
    "watching"                  => "Watching",
    "internal_ticket"           => "Internal Ticket|Internal Tickets",

    /*
     * 2.4.1
     */
    "downloading"               => "Descargando...",
    "downloading_desc"          => "Si la descarga no empieza automáticamente en unos segundos, por favor, <a href=':href'>haz click aquí</a> para acceder directamente a la URL de descarga.",

);
