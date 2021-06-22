<a href="create.php">create</a>
<?
    $product_file = fopen("products.json", 'r', true);
    $product_json = fgets($product_file);
    $product_value = json_decode($product_json, true);
    echo "<pre>";?>
    <table>
        <tr>
            <td>Название</td>
            <td>Единица измерения</td>
            <td>Редактирование</td>
        </tr>
        <?
            foreach($product_value as $key => $value){
                echo "<tr>
                        <td>".$product_value[$key]['name'].'</td>
                        <td>'.$product_value[$key]['ves'].'</td>
                        <td><a href="edit.php?id='.$product_value[$key]['id'].'">update</a></td>
                        </tr>';
            }
        ?>
    </table>