<?php 
include_once("php_includes/check_login_status.php");
$sql = "SELECT username, avatar FROM users WHERE avatar IS NOT NULL AND activated = '1' ORDER BY RAND() LIMIT 32";
$query = mysqli_query($db_conx, $sql);
$usernumrows = mysqli_num_rows($query);
$userlist = "";

while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
    $user = $row["username"];
    $avatar = $row["avatar"];
    $profile_pic = 'user/' .$u. '/' .$avatar;
    $userlist .= '<a href ="user.php?u='.$u.'"title="'.$u.'"><img src="'.$profile_pic.'" alt="'.$u.'" 
    style = "width:100px; hight:100px; margin:10px;"</a>';
}

$sql = "SELECT COUNT(id) FROM users WHERE activated = '1'";
$query = mysqli_query($db_conx, $sql);
$row = mysqli_fetch_row($query);
$usercount = $row[0];
?> 