<h1>Регистрация</h1>
    <form action="registration.php" method="POST">
        <input type="text" name="name" placeholder="Имя"><br><br>
        <input type="text" name="surname" placeholder="Фамилия"><br><br>
        <input type="email" name="email" placeholder="Имэйл"><br><br>
        <input type="phone" name="phone" placeholder="Телефон"><br><br>
        <input type="text" name="login" placeholder="Логин"><br><br>
        <input type="text" name="pass" placeholder="Пароль"><br><br>
        <input type="date" name="wasborn"><br><br>
        <input type="hidden" name="check" value="reg">
        <button type="submit">Зарегистрироваться</button>
    </form>
    <?php 
        if($_GET['error'] == '1'){
            echo '<div style="padding: 5px; background-color: pink; color: red;">Такой логин существует!</div>';
        }
    ?>