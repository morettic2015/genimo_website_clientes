<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        const ID_COMPANY = '67';
        const URL_FIND_BY_ID = "https://genimo.com.br/api/site/property/";

class GenimoFrontEnd {

    public static final function getDetail($id) {


        $mURL = URL_FIND_BY_ID . ID_COMPANY . "/" . $id;

        echo $mURL;

        return GenimoFrontEnd::getJsonFromUrl($mURL);
    }

    public static final function getJsonFromUrl($url) {
        $jsonRet = file_get_contents($url);
        return json_decode($jsonRet);
    }

}
