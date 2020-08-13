<?php

return [
    /*
    |----------------------------------------------------------------------------
    | Authentication with Service Accounts
    |----------------------------------------------------------------------------
    |
    | An example of this can be seen in https://github.com/googleapis/google-api-php-client/blob/master/examples/service-account.php.
    |
    | Some APIs (such as the YouTube Data API) do not support service accounts. Check with the specific API    documentation if API calls return unexpected 401 or 403 errors.
    |
    | Follow the instructions to Create a Service Account
    |
    | Download the JSON credentials
    |
    | Set the path to these credentials using the GOOGLE_APPLICATION_CREDENTIALS environment variable:
    |
    | putenv('GOOGLE_APPLICATION_CREDENTIALS=/path/to/service-account.json');
    |
    */
    'service' => putenv('GOOGLE_APPLICATION_CREDENTIALS=/app/environment/my_secret.json'),
];