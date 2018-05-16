<?php
/**
 * Created by PhpStorm.
 * User: aliwo
 * Date: 2017-08-15
 * Time: 오후 3:04
 */

function drawHistoryDialog($table, $product)
{
    echo "<form action=\"/m/models/new_history.php\" method=\"POST\">
        <fieldset>";
    if($table=='price_history')
    {
        echo "Price History:<br>";
    }

    else if ($table == 'production_history')
    {
        echo "Production History:<br> ";
    }

    else if ($table == 'storage_history')
    {
        echo "Storage History:<br>";
    }

    echo "<textarea name=\"remark\" rows='4' cols='34'> </textarea> <br>
            <input type='hidden' name='table' value='{$table}'>
            <input type='hidden' name='product_id' value='{$product['idx']}'>
            <input type='hidden' name='code' value='{$product['code']}'>
            <input type=\"submit\" />
        </fieldset>
        </form>
        ";

}


function drawHistories($table ,$histories)
{
    if($table == 'price_history')
    {
        $price_histories = $histories;
        if($price_histories)
        {
            while($price_histories_row = mysql_fetch_assoc($price_histories))
            {
                echo "<li>{$price_histories_row['remark']} (( {$price_histories_row['created_at']} )) </li>";
            }
        }
    }

    if($table == 'production_history')
    {
        $price_histories = $histories;
        if($price_histories)
        {
            while($price_histories_row = mysql_fetch_assoc($price_histories))
            {
                echo "<li>{$price_histories_row['remark']} (( {$price_histories_row['created_at']} )) </li>";
            }
        }
    }

    if($table == 'storage_history')
    {
        $price_histories = $histories;
        if($price_histories)
        {
            while($price_histories_row = mysql_fetch_assoc($price_histories))
            {
                echo "<li>{$price_histories_row['remark']} (({$price_histories_row['created_at']} )) </li>";
            }
        }
    }

}

?>