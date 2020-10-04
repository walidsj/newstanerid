<?php defined('BASEPATH') or exit('No direct script access allowed');

class Google
{
  public function __construct()
  {
    $this->ci = &get_instance();
    $this->ci->load->library('session');

    $state =   bin2hex(random_bytes(128 / 8));

    include_once __DIR__ . '/../../vendor/autoload.php';
    $this->client = new Google_Client();
    $this->client->setClientId(getenv('CLIENT_ID'));
    $this->client->setClientSecret(getenv('CLIENT_SECRET'));
    $this->client->setRedirectUri(getenv('REDIRECT_URI'));
    $this->client->setState($state);
    $this->client->addScope('email');
    $this->client->addScope('profile');
    $this->client->addScope('openid');
    // $this->client->setAccessType('online');
    // $this->client->setIncludeGrantedScopes(true);

    //validasi login atau tidak
    if (!empty($this->ci->session->access_token)) {
      if ($this->client->isAccessTokenExpired() == true) {
        $this->client->refreshToken($this->ci->session->access_token['access_token']);
        $access_token = $this->client->getAccessToken();
        if ($access_token != null) {
          $this->client->setAccessToken($access_token);
          $this->status_login = true;
        } else {
          $this->ci->session->unset_userdata('access_token');
          $this->status_login = false;
        }
      } else {
        $this->status_login = true;
      }
    } else {
      $access_token = $this->client->getAccessToken();
      if (!empty($access_token)) {
        $this->client->revokeToken();
        $this->status_login = false;
      } else {
        $this->status_login = false;
      }
    }
  }

  public function isLoggedIn()
  {
    return $this->status_login;
  }

  public function getUrlLogin()
  {
    return $this->client->createAuthUrl();
  }

  public function setAccessToken()
  {
    if (!empty($_GET['code'])) {
      if (!empty($this->ci->session->access_token)) {
        return false;
      } else {
        $this->client->authenticate($_GET['code']);
        $access_token = $this->client->getAccessToken();
        $this->client->setAccessToken($access_token);
        $this->ci->session->set_userdata('access_token', $access_token);
        return true;
      }
    } else {
      return false;
    }
  }

  public function getUserInfo()
  {
    $GoogleService = new Google_Service_Oauth2($this->client);
    $User = $GoogleService->userinfo->get();
    return json_encode($User);
  }

  public function logout()
  {
    $this->client->revokeToken();
    $this->ci->session->unset_userdata('access_token');

    if (!empty($this->ci->session->access_token)) {
      return false;
    } else {
      return true;
    }
  }
}
