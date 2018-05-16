<?php

$imageDir = '/__susu/_admin/goods_img';

function connectDB()
{
    $link = mysql_connect('localhost', 'junghk', 'sususopum');
    if(!$link)
    { die('Not connected: '.mysql_error()); } // php에서 문자와 문자를 결합할 때는 .을 사용한다.

    $db_selected = mysql_select_db('junghk');
    if(!$db_selected)
    {die('Can not use db: '.mysql_error()); }
}

function getProduct($code)
{
    $query = '';
    if (!$code)
    {
        echo '<li>code == null, default hq64</li>';
        $code = 'hq64';
        $query = sprintf("SELECT * FROM products WHERE code = '%s'", $code);
    }
    else
    {
        $query = sprintf("SELECT * FROM products WHERE code = '%s'", $code);
    }

    $result = mysql_query($query);

    if(!$result)
    {
        die("invalid product query".mysql_error());
    }
    return $result;
}

function getHistory($product_id, $table)
{
    $query = '';
    if ($product_id)
    {
        $query = sprintf("SELECT * FROM %s WHERE product_id = '%s' ORDER BY created_at DESC LIMIT 10", $table ,$product_id);
    }

    $result = mysql_query($query); //$result는 null일 수 있음.

    return $result;
}

?>