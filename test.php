<?php

require_once('./prestashop/PrestaShop-webservice-lib-master/PSWebServiceLibrary.php');

try {
    // creating webservice access
    $webService = new PrestaShopWebservice('http://34.94.139.183/prestashop', '51LGLPV1LTL934CMJREVA3RZ2ZPQASEG', false);
 
    // call to retrieve all customers
    $xml = $webService->get(['resource' => 'customers']);
} catch (PrestaShopWebserviceException $ex) {
    // Shows a message related to the error
    echo 'Other error: <br />' . $ex->getMessage();
}

?>