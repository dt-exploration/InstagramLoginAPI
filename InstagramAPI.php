<?php

class Instagram
{




  public function getLoginURL()
  {
      return "https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=code";
  }
}



 ?>
