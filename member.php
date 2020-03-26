<?php
session_start();

if($_SESSION['ses_id'] == ''){
    echo "<meta http-equiv='refresh' content='1;URL=index.php'>";

}elseif($_SESSION['status'] != 1){
    echo "<meta http-equiv='refresh' content='1;URL=logout.php'>";

}else{
?>
<h1>Member</h1>
<a href="logout.php" class="btn btn-primary">Logout</a>
<?php
}
?>