<?php
/**
 * Created by PhpStorm.
 * User: aliwo
 * Date: 2017-08-15
 * Time: 오후 5:59
 */

function generateCookieName()
{

}

function sessionCheck()
{
    session_start();
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name']))
    {
        echo "<meta http-equiv='refresh' content='0;url=/m/controllers/login.php'>";
        exit;
    }
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    echo "<p>Welcome. $user_name($user_id)</p>";
}


?>