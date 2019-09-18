<?php

return array(

    // Standard messages
    "item_created"                      => "Creó nuevo :item :rel.",
    "item_updated"                      => "Actualizó :item :rel.",
    "item_deleted"                      => "Eliminó :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Creó nuevo baneo en IP :rel.",
    "ip_ban_updated"                    => "Actualizó baneo en IP :rel.",
    "ip_ban_deleted"                    => "Eliminó baneo en IP :rel.",
    "banned_ip_on_login"                => "Baneo de IP :rel durante 15 minutos.",

    "ip_whitelist_created"              => "Añadió IP :rel a la lista blanca.",
    "ip_whitelist_updated"              => "Actualizó IP :rel a la lista blanca.",
    "ip_whitelist_deleted"              => "Eliminó IP :rel de la lista blanca.",

    "system_cleanup"                    => "Limpieza del sistema ejecutada el :rel.",

    "api_failed_login"                  => "IP :rel fallo al autenticar al API.",

    "user_successful_login"             => "Sesión iniciada en el Help Desk.",
    "user_failed_login"                 => "Error al autenticar.",
    "user_successful_logout"            => "Sesión cerrada del Help Desk.",

    "user_registered"                   => "Registró una cuenta.",
    "user_confirmed"                    => "Confirmó su cuenta.",
    "user_password_set"                 => "Estableció una contraseña para su cuenta.",
    "user_password_reset"               => "Reestableció la contraseña de su cuenta.",

    "user_added_to_organisation"        => "Usuario :rel añadido a la organización :new_value.",
    "user_removed_from_organisation"    => "Usuario :rel eliminado de la organización :old_value.",
    "user_profile_updated"              => "Perfil de cuenta actualizado.",
    "user_left_organisation"            => "Dejó la organización :rel.",
    "user_organisation_emptied"         => "Eliminó todos los usuarios de la organización :rel.",
    "user_organisation_updated"         => "El nivel de acceso de la organización de :rel ha cambiado de :old_value a :new_value.",
    "organisation_membership_updated"   => "Actualizó la suscripción del usuario de la organización :rel.",
    "organisation_profile_updated"      => "Actualizó el perfil de la organización :rel.",
    "organisation_owner_updated"        => "Transfirió la propiedad de la organización :rel a :new_value.",

    "user_emailed"                      => "Envió un correo a :rel.",

    "mass_email_queued"                 => "Puso en cola correos :new_value en secciones para ser enviados.",
    "mass_email_sent"                   => "Envió correos :new_value en cola.",

    "email_queue_deleted"               => "Eliminó correos en cola a :rel.",

    "scheduled_task_run"                => "Las tareas programadas :rel se han ejecutado manualmente.",

    "selfservice_article_upvoted"       => "Valoró positivamente el artículo :rel.",
    "selfservice_article_downvoted"     => "Valoró negativamente el artículo :rel.",
    "selfservice_comment_posted"        => "Publicó un nuevo :rel.",
    "selfservice_comment_upvoted"       => "Votó positivamente subiendo la valoración de :rel de :old_value a :new_value.",
    "selfservice_comment_downvoted"     => "Votó negativamente bajando la valoración de :rel de :old_value a :new_value.",

    "ticket_opened"                     => "Abrió un nuevo ticket #:rel.",
    "ticket_opened_on_behalf"           => "Abrió un nuevo ticket #:rel en nombre de :new_value.",
    "ticket_opened_email"               => "Importó correo como nuevo ticket #:rel.",
    "ticket_deleted"                    => "Eliminó ticket ':old_value' (#:rel).",

    "ticket_followup_set"               => "Se ha establecido un seguimiento en el Ticket #:rel.",
    "ticket_followup_updated"           => "El seguimiento en el Ticket #:rel se ha actualizado.",
    "ticket_followup_deleted"           => "El seguimiento en el Ticket #:rel se ha eliminado.",

    "ticket_message_reply"              => "Publicó una nueva respuesta al ticket #:rel.",
    "ticket_message_note"               => "Publicó una nota nueva al tickett #:rel.",
    "ticket_message_deleted"            => "Eliminó un mensaje en el ticket #:rel.",

    "ticket_user_updated"               => "Actualizó el usuario en el ticket #:rel de :old_value a :new_value.",
    "ticket_subject_updated"            => "Actualizó el asunto en el ticket #:rel.",
    "ticket_department_updated"         => "Actualizó el departamento en el ticket #:rel de :old_value a :new_value.",
    "ticket_status_updated"             => "Actualizó el estado en el ticket #:rel de :old_value a :new_value.",
    "ticket_priority_updated"           => "Actualizó la propridad del ticket #:rel de :old_value a :new_value.",
    "ticket_tag_added"                  => "Actualizó la etiqueta :new_value al ticket #:rel.",
    "ticket_tag_updated"                => "Actualizó las etiquetas en el ticket #:rel.",
    "ticket_tag_removed"                => "Eliminó etiqueta :new_value del ticket #:rel.",
    "ticket_slaplan_updated"            => "Actualizó el plan SLA en el ticket #:rel de :old_value a :new_value.",
    "ticket_duetime_updated"            => "Actualizó la Updated the due time on ticket #:rel to :new_value.",
    "ticket_duetime_paused"             => "Paused the due time on ticket #:rel until next user reply.",
    "ticket_customfield_updated"        => "Updated custom fields on ticket #:rel.",
    "ticket_converted_user"             => "Converted internal ticket #:rel to user ticket.",
    "ticket_converted_internal"         => "Converted user ticket #:rel to internal ticket.",

    "ticket_assigned_operator"          => "Assigned :new_value to ticket #:rel.",
    "ticket_unassigned_operator"        => "Unassigned :new_value from ticket #:rel.",
    "ticket_assigned_self"              => "Assigned self to ticket #:rel.",
    "ticket_assigned_updated"           => "Updated assigned operators on ticket #:rel.",

    "ticket_locked"                     => "Locked ticket #:rel.",
    "ticket_unlocked"                   => "Unlocked ticket #:rel.",
    "ticket_locked_reply"               => "Reply could not be added to locked ticket #:rel.",

    "ticket_merged"                     => "Ticket(s) :new_value merged into ticket #:rel.",
    "ticket_unmerged"                   => "Ticket :rel has been unmerged.",

    "ticket_user_blocked"               => "Blocked email :new_value (from user on ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel has been closed.",
    "ticket_inactive_closed"            => "Closed inactive ticket #:rel from status :old_value.",
    "ticket_awaiting_response"          => "Sent waiting for response email to user on ticket #:rel.",

    "ticket_split_from"                 => "Messages split from old ticket #:rel to new ticket #:new_value.",
    "ticket_split_to"                   => "Messages split from old ticket #:old_value to new ticket #:rel.",

    "ticket_email_user"                 => "Sent email to user.",
    "ticket_email_operators"            => "Sent email to operators.",

    "ticket_feedback_dequeued"          => "Removed feedback form request for ticket #:rel from queue.",
    "ticket_feedback_form_sent"         => "Sent feedback form request for ticket #:rel.",

    "ticket_attachment_saved"           => "Added attachment to ticket #:rel.",
    "ticket_attachment_deleted"         => "Deleted attachment from ticket #:rel.",

    "ticket_throttled"                  => "Rejected new ticket from :rel due to throttling.",

    /*
     * 2.0.2
     */
    "ticket_email_operator_group"       => "Sent email to operator group :new_value.",
    "ticket_email_user_group"           => "Sent email to user group :new_value.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Added attachment ':new_value' to article ID :rel.",
    "selfservice_attachment_deleted"    => "Deleted attachment ':new_value' from to article ID :rel.",
    "ticket_unassigned_self"            => "Unassigned self from ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Reply could not be added due to ticket belonging to a disabled brand #:rel.",
    "personal_signatures_updated"       => "Updated personal signatures.",
    "operator_signatures_updated"       => "Updated :rel's signatures.",
    "check_email_failed"                => "Error: Failed to download email from account :old_value: ':rel'.",
    "ticket_added_cc"                   => "Email(s) :new_value added to CC address list for ticket #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value removed from CC address list for ticket #:rel.",
    "invalid_department_brand"          => "Failed to set department to ':new_value' on ticket #:rel, department does not belong to ticket brand.",

    /*
     * 2.1.1
     */
    "ticket_message_updated"            => "Updated message :message_id in ticket #:rel.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Sent an email with subject ':extra_rel1' to :rel.",
    "sent_template_email_to"            => "Sent ':extra_rel1' email to :rel.",
    "sent_ticket_email_to_user"         => "Sent ':extra_rel1' email to user for ticket #:rel.",
    "sent_email_to_operators"           => "Sent ':extra_rel1' email to operators.",
    "sent_ticket_email_to_operators"    => "Sent ':extra_rel1' email to operators for ticket #:rel.",
    "sent_email_to_operator_group"      => "Sent ':extra_rel1' email to operator group ':new_value' for ticket #:rel.",
    "ticket_macro_applied"              => "The macro ':new_value' was ran on ticket #:rel.",
    "ticket_macro_automatic"            => "The macro ':new_value' automatically ran on ticket #:rel.",
    "email_template_not_found"          => "Email template ID ':new_value' not found, aborted sending email.",
    "ticket_duetime_unset"              => "Unset the due time on ticket #:rel.",
    "private_conversation_started"      => "Started a conversation with :rel.",
    "private_message_sent"              => "Sent a message to :rel.",
    "not_imported_replies_disabled"     => "An email :extra_rel1 was received for ticket #:rel, but was not imported as ticket email replies are disabled.",
    "not_imported_ticket_locked"        => "An email :extra_rel1 was received for ticket #:rel, but was not imported as the ticket is locked.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Ticket user added to user group :new_value.",
    "ticket_user_removed_from_group"    => "Ticket user removed from user group :old_value.",
    "email_on_behalf"                   => "Forwarded :extra_rel2 on behalf of ':extra_rel1' in ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Sent ':extra_rel1' email to :new_value, department does not accept emails from unregistered users.",
    "deleted_user"                      => "Deleted :item ':rel' with email ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Linked ticket #:rel with ticket :extra_rel1.",
    "unlinked_ticket"                   => "Unlinked ticket #:rel from ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Deleted attachment ':old_value' from queued email ':rel'.",
    "forward_ticket_email"              => "Forwarded ticket #:rel to third-party, view ':extra_rel1' email.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Updated :rel by :extra_rel1.",
    "selfservice_comment_status"        => "Changed status of :rel by :extra_rel1 from :old_value to :new_value.",
    "selfservice_comment_deleted"       => "Deleted comment by :extra_rel1.",
    "ticket_message_posted"             => "Posted a new :extra_rel1 to ticket #:rel.",
    "ticket_message_edited"             => "Edited a :extra_rel1 in ticket #:rel.",
    "email_send_failed"                 => "Failed to send email.",
    "ticket_brand_updated"              => "Updated the brand on ticket #:rel from :old_value to :new_value.",
    "export_scheduled"                  => "An export of user :rel has been scheduled.",
    "export_generated"                  => "Export :new_value of user :rel has been generated and stored on the system.",
    "export_deleted"                    => "Export :old_value of user :rel has been deleted from the system.",
    "deleted_inactive_records"          => "Automatically deleted :old_value inactive :rel.",
    "deleted_old_records"               => "Automatically deleted old :rel records.",
    "sent_email_to_user_group"          => "Queued email to user group ':new_value' for ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Watching ticket #:rel.",
    "ticket_unwatching"                 => "No longer watching ticket #:rel.",
    "ticket_watch_operator"             => "Set :new_value to watch ticket #:rel.",
    "ticket_unwatch_operator"           => "Unset :new_value from watching ticket #:rel.",

);
