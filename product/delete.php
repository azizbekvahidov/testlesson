<?php
    if(isset($_GET['id'])){
        $product_file = fopen("products.json", 'r', true);
        $product_json = fgets($product_file);
        $product_value = json_decode($product_json, true);
        foreach($product_value as $key => $value){
            if($product_value[$key]['id'] == $_GET['id']){
                unset($product_value[$key]);
                break;
            }
        }
        fclose($product_file);
        $f = fopen("products.json", "w+", true);
        $temp = json_encode($product_value);
        fwrite($f, $temp);
        fclose($f);
        header("Location: http://proj/product/product.php");
    }
?>