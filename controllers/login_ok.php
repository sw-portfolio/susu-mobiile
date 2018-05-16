<?php

function getNonce($user_id)
{
    $id = $user_id; //(either by username, session, or something)
    $nonce = hash('sha512', makeRandomString());
    storeNonce($id, $nonce);
    return $nonce;
}

function verifyNonce($data, $cnonce, $hash, $user_id)
{
    $id = $user_id; //(either by username, session, or something)
    $nonce = getNonce($id);  // Fetch the nonce from the last request
    removeNonce($id, $nonce); //Remove the nonce from being used again!
    $testHash = hash('sha512',$nonce . $cnonce . $data);
    return $testHash == $hash;
}

$hashed_value = '3917e4b5bdc3c6fb37b3b37067ad0f3737c3fdb3e940343076d6d759267bcd5e';

if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$members = array('sususopum'=>array('pw'=>'SWZZAng', 'name'=>'dev_SW'))   ;

if(!isset($members[$user_id])) {
    echo "<script>alert('wrong ID or value');history.back();</script>";
    exit;
}
if($members[$user_id]['pw'] != $user_pw) {
    echo "<script>alert('wrong ID or vlaue');history.back();</script>";
    exit;
}
session_start();
$_SESSION['user_id'] = $user_id;
$_SESSION['user_name'] = $members[$user_id]['name'];
?>
<meta http-equiv='refresh' content='0;url=/m/mobile.php'>