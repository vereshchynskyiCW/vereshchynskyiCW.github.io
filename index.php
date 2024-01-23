<?php

$requestData = array(
    'client_id' => '3MVG9T992fY2Y4vvdfJWYI00U69AXeL5N3JsyVZQ6qm3NiKTgIBLq4Y8SjPGZyrnQpMyVgr8MDlw7hqfd58T1',
    'client_secret' => 'B1E2AC46C2D1E78C88A94630DFC4E20394DAB8842053028EB6D1C9D0F1978897',
    'redirect_uri' => 'https://salesforce.com',
    'grant_type' => 'password',
    'username' => 'test-gd4zwexuggb4@example.com',
    'password' => 'b2ocmljlv@yHo'
);

$reqCurl = curl_init();
curl_setopt_array($reqCurl, array(
    CURLOPT_URL => 'https://login.salesforce.com/services/oauth2/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($requestData)
));
$response = curl_exec($reqCurl);

$token = json_decode($response)->access_token;

?><script src='https:/platform-drive-7012-dev-ed.scratch.my.salesforce-sites.com/page/lightning/lightning.out.js'></script>
<div id='element1'></div>

<script>
    const appName = 'c:shop';
    const componentName = 'c:bookingForm';
    const lightningEndpoint = 'https://platform-drive-7012-dev-ed.scratch.my.salesforce-sites.com/page';
    const targetElement = document.querySelector("#element1");
    const componentAttributes = {
        configName : 'config',
        cardItemsGroupName: 'overview',
        language: 'de',
        eventId: 'a035t000008NfheAAC',
        someParam: 'fake'
    };

    $Lightning.use(
        appName,
        function (){
            $Lightning.createComponent(
                componentName,
                componentAttributes,
                targetElement,
                function (cmp){
                    console.log('lightning component created');
                }
            );
        },
        lightningEndpoint
    );
</script><?php
?>