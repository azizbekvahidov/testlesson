  
<?  
    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['ves'])){
        $products_file = fopen("products.json", "r", true);
        $file_dir = 'products.json';
        $products_json = fread($products_file, filesize($file_dir));
        fclose($products_file);
        $products_val = json_decode($products_json, true);
        foreach($products_val as $key => $val){
            if($products_val[$key]['id'] == $_POST['id']){
                $products_val[$key]['name'] = $_POST['name'];
                $products_val[$key]['ves'] = $_POST['ves'];
            }
        }
        $f = fopen("products.json", 'w+', true);
        $temp = json_encode($products_val);
        fwrite($f, $temp);
        fclose($f);
        header('Location: http://proj/product/product.php');
    }  
?>