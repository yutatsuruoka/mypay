<?php
require_once "common.php";

//get JSON access token object (with refresh_token parameter)
$token = (run_curl(ACCESS_TOKEN_ENDPOINT, 'POST', $postvals));
var_dump($token);
echo "<br /><br />";

//construct URI to fetch profile information for current user
$profile_url = sprintf("%s?oauth_token=%s", PROFILE_ENDPOINT, $token->access_token);
var_dump($profile_url);
echo "<br /><br />";

//fetch profile of current user
$profile = run_curl($profile_url);

var_dump($profile);