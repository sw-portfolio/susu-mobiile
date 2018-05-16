<?php
/**
 * Created by PhpStorm.
 * User: aliwo
 * Date: 2017-08-15
 * Time: 오후 1:45
 */
include 'header.php';
include 'footer.php';
include 'history.php';
//include '../models/models.php';

function showMobilePage($product, $imageDir)
{
    drawHeader();

    echo "<div> {$product['code']}   {$product['stock']}EA </div> ";
    echo
    "<div>
        <form action=\"/m/mobile.php\" method=\"GET\" >
        <fieldset>
            code: <input type=\"text\" name=\"code\">
            <input type=\"submit\" />
        </fieldset>
        </form>
    </div>
    ";
    echo "<img src='{$imageDir}/{$product['image1']}' height='120' width='110'>";
    echo "<li>PRICE: {$product['price']}WON </li>";
    echo "<br>";
    echo "<li>REMARK: {$product['remark']} </li>";
    echo "<br><br>";

    drawHistoryDialog('price_history', $product);
    drawHistories('price_history', getHistory($product['idx'], 'price_history'));
    echo "<br><br>";
    drawHistoryDialog('production_history', $product);
    drawHistories('production_history', getHistory($product['idx'], 'production_history'));
    echo "<br><br>";
    drawHistoryDialog('storage_history', $product);
    drawHistories('storage_history', getHistory($product['idx'], 'storage_history'));

    echo "<br><br>";
    echo "<fieldset>DETAIL: {$product['detail']}</fieldset>";

    drawFooter();
}

?>