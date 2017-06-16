<?php
/**
 * User: Edgardo Acosta
 * Add User to mailchimp list
 */


include_once 'functions.php';
require'mailchimp/Batch.php';
require 'mailchimp/Webhook.php';
include 'mailchimp/MailChimp.php';
use \DrewM\MailChimp\MailChimp;

$api_key = "758a7a6cc4c19a6eee90b15b21f4c6c9-us16";

$fc = new functions();
$mailchimp = new MailChimp($api_key);
$response = array("success" => 0, "error" => 0, "msg" => '');


$email = '';
$name = '';
$last_name = '';
$password = '';
if (isset($_POST['email']) && $_POST['email'] != '') {
    $email = $_POST['email'];
}
if (isset($_POST['name']) && $_POST['name'] != '') {
    $name = $_POST['name'];
}
if (isset($_POST['last_name']) && $_POST['last_name'] != '') {
    $last_name = $_POST['last_name'];
}
if (isset($_POST['password']) && $_POST['password'] != '') {
    $password = $_POST['password'];
}


if ($respon = $fc->add_user_to_mailchimp($mailchimp,$email,$name,$last_name) != false){
    $response["success"] = 1;
    $response["error"] = 0;
    $response["msg"] = "User added succesfuly";
}
else{
    $response["success"] = 0;
    $response["error"] = 1;
    $response["msg"] = "User already exists";
}

echo json_encode($response);


