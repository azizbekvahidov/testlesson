<form action="update.php" method="POST">
<?
        $products_file = fopen("products.json", "r", true);
        $file_dir = 'products.json';
        $products_json = fread($products_file, filesize($file_dir));
        $products_val = json_decode($products_json, true);
        foreach($products_val as $key => $val){
            if($products_val[$key]['id'] == $_GET['id']){
                echo "Product name <br>";
                echo "<input type='text' value='".$products_val[$key]['name']."' name='name'><br><br>";
                echo "Product ves <br>";
                echo "<input type='text' value='".$products_val[$key]['ves']."' name='ves'><br><br>";
                echo "<input type='hidden' value='".$products_val[$key]['id']."' name='id'>";
            }
        }
        
    ?>

    <button type="submit">Update</button>
</form>