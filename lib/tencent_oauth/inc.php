<?
@header('Content-Type:text/html;charset=utf-8'); 
session_start();
@require_once('config.php');
@require_once('oauth.php');
@require_once('opent.php');
@require_once('api_client.php');

$c = new MBApiClient( MB_AKEY , MB_SKEY , $_SESSION['last_key']['oauth_token'] , $_SESSION['last_key']['oauth_token_secret']);
?>

