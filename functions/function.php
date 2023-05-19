<?php
function getCliendDomains($domaincheckadd, $clientid)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://client.tgs.com.vn/includes/api.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt(
        $ch,
        CURLOPT_POSTFIELDS,
        http_build_query(
            array(
                'action' => 'GetClientsDomains',
                'username' => '3vJTAR31PyBm55GCLlmuooDbu93tD6Xn',
                'password' => 'U2FDdGxQRevFxU3h2AygNgTL54BAPxxb',
                'clientid' => $clientid,
                'stats' => true,
                'responsetype' => 'json',
            )
        )
    );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $objdomain = json_decode($response);
    $objdomaindomains = ($objdomain->domains)->domain;
    //echo '<pre>';print_r($objdomaindomains);echo '</pre>';

    $domaincheck = $domaincheckadd;
    foreach ($objdomaindomains as $value) {
        //   echo '<pre>';print_r($value);echo '</pre>';
        if ($domaincheck == $value->domainname) {
            return true;
        }
    }
    return false;
}

function getKeyPlesk()
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_PORT => "8443",
        CURLOPT_URL => "https://202.143.109.119:8443/api/v2/auth/keys",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r\n  \"login\": \"admin\",\r\n  \"ip\": \"115.79.30.78\",\r\n  \"description\": \"Secret Key\"\r\n}",
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Authorization: Basic cm9vdDpUaGVnaW9pc29AMTIzKiokJEBAQEBAQA==",
            "Content-Type: application/json",
            "User-Agent: Thunder Client (https://www.thunderclient.com)"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
}

function getDomain($domainname)
{

    $curl = curl_init();

    curl_setopt_array(
        $curl,
        array(
            CURLOPT_URL => 'https://103.42.58.124/api/v2/domains?name=' . $domainname,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic cm9vdDpUaGVnaW9pc29AMTIzKiokJEBAQEBAQA=='
            ),
        )
    );

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
    if ($response)
        return true;
    else
        return false;
}
getDomain('console.tgs.com.vn');
?>