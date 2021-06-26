<?php
	$filename = "products.json";
	$f = fopen($filename, 'r', true);
	$products_json =  fread($f, filesize($filename));
	$product_list = json_decode($products_json, true);
	$lastId = $product_list[count($product_list)-1]["id"];
	$product_value['id'] = $lastId+1;
	fclose($f);

	$product_value['name'] = $_POST['pname'];
	$product_value['ves'] = $_POST['pves'];
	array_push($product_list, $product_value);

	$f = fopen($filename, 'w+', true);
	$temp = json_encode($product_list);
	fwrite($f, $temp);
	fclose($f);
	header('Location: http://proj/product/product.php');

?>