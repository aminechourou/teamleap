<?php
session_start();
require_once ("autoload.php");

$FB = new \Facebook\Facebook([
'app_id' => '283235162605915',
'app_secret' => '3704a8a5e87660c61b961bac920c0e81',
'default_graph_version' => 'v2.10'
]);
$helper = $FB->getRedirectLoginHelper();


?>