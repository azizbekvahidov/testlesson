<?php
$users_file2 = fopen("users.json", "a+", true);
$users_json2 = fgets($users_file2);
$users_val2 = json_decode($users_json2, true);
foreach($users_val2 as $key => $value){
    if($users_val2[$key]['login'] != $_POST['login']){
        array_push($users_val2, $_POST);
        $temp = json_encode($users_val2);
        $f = fopen("users.json", 'w+', true);
        fclose($f);
        fwrite($users_file2, $temp );
        header('Location: http://proj/auth.php?success=1');
        break;
    }else{
        header('Location: http://proj/register.php?error=1');
    }
}
?>