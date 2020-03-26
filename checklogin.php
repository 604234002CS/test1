<?php
session_start();
includ("connect.php");
$username = $_POST['username'];
$password = md5($_POST['password']);

if($username == ''){
    echo "Check Username";
}else if($password == ''){
    echo "Check Password";
}else{
    $sql = mysql_query("SELECT * FROM member WHERE username = $username AND password = $password");

    $num = mysql_num_rows($sql);
    if($num <= 0){
        echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
    }else{
        while ($user = mysql_fetch_array($sql)){
            if($user['status'] == 1)
            $_SESSION['ses_id'] = session_id();
            $_SESSION['username'] = $user['username'];
            $_SESSION['status'] = "Member";
            echo "<meta http-equiv='refresh' content='1;URL=member.php'>";
            
        }else{
            if($user['status'] == 2)
        $_SESSION['ses_id'] = session_id();
        $_SESSION['username'] = $user['username'];
        $_SESSION['status'] = "User";
            echo "<meta http-equiv='refresh' content='1;URL=user.php'>";
    }
}
?>