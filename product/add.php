  
<?php 
    if(isset($_POST['name']) && isset($_POST['ves'])){
        $product_file = fopen("products.json", 'r', true);
        $product_json = fgets($product_file);
        $product_value = json_decode($product_json, true);
        array_push($product_value, $_POST);
        fclose($product_file);
        $f = fopen("products.json", "w+", true);
        $temp = json_encode($product_value);
        fwrite($f, $temp);
        fclose($f);
        header("Location: http://proj/product/product.php");
    }

?>