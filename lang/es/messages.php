<?php

return array(

    "deleted"               => "¡Eliminado!",
    "success"               => "Éxito",
    "error"                 => "Error",
    "in_progress"           => "En progreso",

    "save_order"            => "Attempting to save the updated order of the items",

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

    "success_ordering"      => "Successfully updated the ordering!",
    "error_ordering"        => "Failed trying to update the ordering.",

    "error_login"           => "Login attempt failed.",
    "success_logout"        => "Successfully logged out.",

    "please_correct"        => "Please correct the following errors and try again.",

    "success_settings"      => "Successfully updated the settings!",
    "error_settings"        => "Failed trying to update the settings.",

    "success_action"        => "Successfully performed the action!",
    "error_action"          => "Failed to perform the action.",

    "success_sending"       => "Successfully sent the :item!",
    "error_sending"         => "Failed trying to send the :item.",

    "error_embed_image"     => "Failed trying to upload the image.",

    "unauthorised"          => "Unauthorised",
    "not_authorised"        => "Not authorised to complete this action.",
    "not_permitted"         => "You are not permitted to view this page. If you think this has been displayed in error, please speak to your application administrator.",

    "page_not_found"        => "Page Not Found",
    "cant_find_page"        => "We can't find the page that you're looking for.",

    "please_report"         => "Please report to an administrator if this was unexpected.",

    "return_to"             => "Return to the :page.",

    "session_expired"       => "Your session expired, please login again.",
    "session_refresh"       => "Your session expired, please refresh the page and then try again.",

    "general_error"         => "An error occurred. Please try again.",

    "no_results"            => "No results.",

    "assign_incomplete"     => "The action could not be completed in full. :names could not be assigned to some tickets.",

    "maintenance_mode"      => "Maintenance mode is active. The help desk is currently inaccessible by users, please remember to turn maintenance mode off when finished.",

    "invalid_captcha"       => "The captcha code entered was invalid or incorrect, please try again.",
    "blocked_as_spam"       => "Your request was detected as spam. Please contact an administrator if you feel this has been shown in error.",
    "account_exists"        => "An active account already exists with this email address. Please login or use the forgotten password feature if you cannot remember your password.",
    "error_loading_comments" => "There was a problem loading the comments.",

    "invalid_auth"          => "Invalid authentication credentials.",

    "forbidden"             => "Forbidden",

    "not_logged_exception"  => "<strong>Whoops! Something went wrong.</strong><br />Please notify the system administrator if the error persists.",

    "too_many_ticket_reqs"  => "Too many ticket requests made for :email. The limit is :max in :decay minutes.",

    "not_operator"          => "Something went wrong. The selected operator is not valid, please ensure they belong to an operator group and the group has an associated role.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>Whoops! Something went wrong.</strong><br />An error occurred while loading table data. Please notify your system administrator if the error persists.",

    "missing_extension"     => "Missing Extension",
    "php_ldap_missing"      => "The php-ldap extension is required to use LDAP authentication. Please enable it and refresh the page.",
    "php_imap_missing"      => "The php-imap extension is required to use Email Download. If you wish to use Email Download, please enable the extension and refresh the page.",

    /*
     * 2.0.3
     */
    "only_ssl_connections"  => "Only SSL connections are allowed, you should update your request to a secure connection.",
    "queued_emails"         => "Success - The emails will begin being queued and sent shortly.",
    "error_loading_message" => "An error occurred while loading the message. Please try again.",
    "please_refresh"        => "Please refresh the page.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Service currently unavailable.</strong><br />Unable to connect to the database.",
    "category_required"     => "The article must belong to one or more categories.",
    "warning"               => "Warning",
    "note"                  => "Note",
    "brand_invalid_dept"    => "The action could not be completed in full. The department could not be updated on some tickets due to their brand.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Failed to upload attachment \":filename\", reason: \":reason\"",
    "upload_max_size"       => "File must be smaller than :size",
    "upload_wrong_type"     => "File type is not allowed",

    /*
     * 2.3.0
     */
    "delete_record"         => "Delete :record?",
    "cannot_be_undone"      => "This action cannot be undone.",
    "warn_delete"           => "This will permanently delete the <strong>:name</strong> :record from the system.",
    "delete_confirm"        => "Yes, Delete :record",
    "keep_record"           => "No, Keep :record",
    "delete_relations"      => "Deleting the <strong>:name</strong> :record will also permanently delete all of the following related data:",
    "please_check"          => "You must check all of the boxes above to confirm you understand the result of this irreversible action.",
    "failed_attachments"    => "Failed to attach some files.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Success - the email has been sent.",
    "task_already_running"  => "Scheduled task is running automatically currently, please try again shortly.",
    "linked_account"        => "The social account has successfully been linked with your account.",
    "already_linked"        => "The social account is already linked with another account. Please login to the other account and unlink it.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Does this look correct?",
    "no_revert"             => "No! Revert",
    "attachment_not_found"  => "The attachment was not found.",

);
