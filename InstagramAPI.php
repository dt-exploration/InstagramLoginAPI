<?php

require_once "settings.php";

class Instagram
{

    private $client_id;
    private $client_secret;
    private $redirect_uri;

    public function __construct($settings = array())
    {
        $this->client_id = $settings ['client_id']
        $this->$client_secret = $settings['client_secret']
        $this->redirect_uri = $settings['redirect_uri']
    }

    public function getLoginURL()
    {
      return "https://api.instagram.com/oauth/authorize/?client_id=$this->client_id&redirect_uri=$this->redirect_uri&response_type=code";
    }

}

$instagram = new InstagramAPI ();

 ?>
