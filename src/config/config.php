<?php

return [
    /**
     * OFFICE 365 CONNECTION CREDENTIALS/ROUTES.
     */

    //#############DINAMIC FIELDS##########################
    /**
    * CLIENT ID
    */
    'CLIENT_ID' => 'cliente_ID_string...',
    /**
    * CLIENT SECRET
    */
    'CLIENT_SECRET' => 'secret_key...',
    /**
    * REDIRECT URI WHERE THE CONNECTION COMES FROM WHEN THE CONN IS FINISHED
    */
    'REDIRECT_URI' => 'Uri you put on the office 365 api..',

    //#############STATIC FIELDS##########################
    /**
    * AUTHORITY URL
    */
    'AUTHORITY_URL' => 'https://login.microsoftonline.com/common',

    /**
    * AUTHORIZE_ENDPOINT
    */
    'AUTHORIZE_ENDPOINT' => '/oauth2/v2.0/authorize',

    /**
    * TOKEN_ENDPOINT
    */
    'TOKEN_ENDPOINT' => '/oauth2/v2.0/token',

    /**
    * RESOURCE_ID
    */
    'RESOURCE_ID' => 'https://graph.microsoft.com',

    /**
    * SENDMAIL_ENDPOINT
    */
    'SENDMAIL_ENDPOINT' => '/v1.0/me/sendmail',

    /**
    * SCOPES
    */
    'SCOPES' => 'openid profile mail.send',

];
