<?
    $users_file = fopen("users.json", "r", true);
    $users_json = fgets($users_file);
    $users_val = json_decode($users_json, true);
    foreach($users_val as $key => $value){
        if($users_val[$key]['login'] == $_POST['login'] && $users_val[$key]['pass'] == $_POST['pass']){
            $name = $users_val[$key]['name'];
            break;
        }
    } 
    if(empty($name)){
        header('Location: http://practice/register/author.php?error=1');
    }
    else{
        setcookie("auth",true);
        setcookie("name",$name);
    }   
    fclose($users_file);
    header('Location: http://proj/index.php');
?>