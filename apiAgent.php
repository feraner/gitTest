<?php
/**
 * 用于调试api的数据加密协议
 */
class AgentDecryptsData {

    //key
    public static $_slat = 'iamferaner';

    //加密方式
    public static $_cipherMethods = 'AES-128-ECB';


    /**
     * 加密数据
     */
    public static function EncodePostData($postData) {
        $postData = json_encode($postData);
        $postData = openssl_encrypt($postData, self::$_cipherMethods, self::$_slat, OPENSSL_RAW_DATA);
        $postData = base64_encode($postData);
        return $postData;
    }


    /**
     * 解密数据
     */
    public static function DecodePostData($data) {
        $data = base64_decode($data);
        $data = openssl_decrypt($data, self::$_cipherMethods, self::$_slat, OPENSSL_RAW_DATA);
        return json_decode($data, true);
    }

}



$postData = array(
    'name'  => 'feraner',
    'age'   => 18
);

$encodeData = AgentDecryptsData::EncodePostData($postData);

var_dump(AgentDecryptsData::DecodePostData($encodeData));





