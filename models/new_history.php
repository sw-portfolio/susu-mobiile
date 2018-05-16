<?php
include 'models.php';
/**
 * Created by PhpStorm.
 * User: aliwo
 * Date: 2017-08-15
 * Time: 오후 1:54
 */

function makeHistory($table, $product_id, $remark)
{
    connectDB();
    $query = sprintf("INSERT INTO %s (product_id , remark, created_at) VALUES ( %s, '%s', NOW())", $table, $product_id, $remark);
    mysql_query($query);

    if($table == 'price_history')
    {
    }

    if($table == 'production_history')
    {
    }

    if($table == 'storage_history')
    {
    }
}

makeHistory($_POST['table'], $_POST['product_id'], $_POST['remark']);
header("Location: http://sususopum.co.kr/m/mobile.php?code=".$_POST['code']);
die();

?>