<?php
require_once 'vendor/google/api-client/src/contrib/Google_Client.php';
require_once 'vendor/google/api-client/src/contrib/Google_PlusService.php';
session_start();
$client = new Google_Client();
$client->setApplicationName('CTR');

/*API settings*/

/*End API Settings*/
$plus = new Google_PlusService();

if(isset($_REQUEST['logout']))
{
unset($SESSION['access_token'])
}else{

}
class GoogleController extends BaseController{

public function apiSettings()
{

}


}