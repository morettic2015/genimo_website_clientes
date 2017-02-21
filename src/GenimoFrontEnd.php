<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        const ID_COMPANY = '41';
        const URL_FIND_BY_ID = "https://genimo.com.br/api/site/property/";
        const URL_LOGO_IMOBILIARIA = "https://genimo.com.br/logos/";

class GenimoFrontEnd {

    public static final function getDetail($id) {


        $mURL = URL_FIND_BY_ID . ID_COMPANY . "/" . $id;

        //echo $mURL;

        return GenimoFrontEnd::getJsonFromUrl($mURL);
    }

    public static final function getJsonFromUrl($url) {
        $jsonRet = file_get_contents($url);
        return json_decode($jsonRet);
    }

    public static final function getLogo($id) {
        return URL_LOGO_IMOBILIARIA . $id;
    }

    public static final function addSiteContact($nmPerson, $dsEmail, $nuPhone, $dsApproach, $idProperty, $idBooking, $tpContact) {
        $url = 'https://genimo.com.br/api/site/addSiteContact';
        $fields = array(
            'idCompany' => ID_COMPANY,
            'nmPerson' => urlencode($nmPerson),
            'dsEmail' => urlencode($dsEmail),
            'nuPhone' => urlencode($nuPhone),
            'dsApproach' => urlencode($dsApproach),
            'idProperty' => urlencode($idProperty),
            'idBookie' => $idBooking,
            'tpContactPreference' => $tpContact
        );
        echo "<!--";
        //var_dump($fields);
        //echo $url;
//url-ify the data for the POST
        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');

//open connection
        $ch = curl_init();

//set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

//execute post
        $result = curl_exec($ch);

//close connection
        curl_close($ch);
        echo "-->";
        echo "<center><h5 style='color:green'>Sucesso sua mensagem foi encaminhada.</h5></center>";
    }

}
