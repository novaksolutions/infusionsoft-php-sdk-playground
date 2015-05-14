<?php
NovakSolutions\Infusionsoft\OAuth2::$clientId = 'your_client_id';
//Go to: https://developer.infusionsoft.com/get-started/ to get your client id and secret
NovakSolutions\Infusionsoft\OAuth2::$clientSecret = 'your_client_secret';

//For local development, using our OAuth2 proxy makes things easier.
NovakSolutions\Infusionsoft\OAuth2::$useProxy = true;
NovakSolutions\Infusionsoft\OAuth2::$proxy = 'https://proxy.novaksolutions.com/index.php';

