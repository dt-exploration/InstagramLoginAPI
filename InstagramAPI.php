<?php

require_once "settings.php";

class InstagramAPI
{

    private $client_id;
    private $client_secret;
    private $redirect_uri;

    public function __construct($settings = array())
    {
        $this->client_id = $settings ['client_id'];
        $this->client_secret = $settings['client_secret'];
        $this->redirect_uri = $settings['redirect_uri'];
    }

    public function getLoginURL()
    {
        return "https://api.instagram.com/oauth/authorize/?client_id=$this->client_id&redirect_uri=$this->redirect_uri&response_type=code";
    }

    public function getTokenAndUserDetails($code)
    {
        $post_fields = array("client_id" => "$this->client_id",
                             "client_secret" => "$this->client_secret",
                             "grant_type" => "authorization_code",
                             "redirect_uri" => "$this->redirect_uri",
                             "code" =>"$code"
                           );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.instagram.com/oauth/access_token" );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);


    }
    //client_id: your client id
    //client_secret: your client secret
    //grant_type: authorization_code is currently the only supported value
    //redirect_uri: the redirect_uri you used in the authorization request. Note: this has to be the same value as in the authorization request.
    //code: the exact code you received during the authorization step.
}

$instagram = new InstagramAPI($settings);

 ?>
