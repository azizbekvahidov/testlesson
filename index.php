<?php

if($_COOKIE["auth"]){?>
    <a href='product/product.php'>product</a> &nbsp; &nbsp; 
    <a href='logout.php'>logout</a> &nbsp; &nbsp; 

<?}
else{
    header("Location: http://proj/auth.php")?>
    <h1>Avtorizatsiyadan o'ting</h1>
    <a href='auth.php'>avtorizatsiya</a> &nbsp; &nbsp; 
    <a href='register.php'>registratsiya</a> &nbsp; &nbsp;
     

<?}

?>