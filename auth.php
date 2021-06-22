<form action="authorize.php" method="post">
    <input type="text" name="login" id=""><br> <br>
    <input type="password" name="pass" id=""> <br><br>
    <button type="submit"> login</button>
</form><br>
    <a href='register.php'>registratsiya</a> &nbsp; &nbsp; 
<?php
        if($_GET['error'] == '1'){
            echo '<div style="padding: 5px; background-color: pink; color: red;">Неверный пароль или логин!</div>';
        }elseif($_GET['success'] == '1'){
            echo '<div style="padding: 5px; background-color: lightgreen; color: green;">Вы успешно зарегистрировались, что-бы работать в системе теперь войдите!</div>';
        }
    ?>