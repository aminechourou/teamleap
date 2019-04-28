<?php
include "Facebook/accesclient.php";

try
{
$accessToken = $helper->getAccessToken();

} catch (\Facebook\Exceptions\FacebookResponseException $e)
{
echo "response exception:".$e->getMessage();
exit();
}
catch (\Facebook\Exceptions\FacebookSDKException $e)
{
echo "sdk exception:".$e->getMessage();
exit();
}
if(!$accessToken){
header('Location: log-in.php');
exit();
}
$oAuth2Client = $FB->getOAuth2Client();
if(!$accessToken->isLongLived())
$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
$response = $FB->get("/me?fields=id, first_name, email, last_name, picture.type(large)", $accessToken);
$userData = $response->getGraphNode()->asArray();
$_SESSION['userData']=$userData;
$_SESSION['access_token']=(string) $accessToken;
header('location: indexfb.php');
exit();
?>