<?php
// It is important for any file that includes this file, to have
// check_login_status.php included at its very top.
$envelope = '<img src="images/note_dead.png" width="22" height="12" alt="Notes" title="This envelope is for logged in members">';
$loginLink = '<a href="login.php">Log In</a> &nbsp; &nbsp; <a href="signup.php">Sign Up</a>';
if($user_ok == true) {
	$sql = "SELECT notescheck FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$row = mysqli_fetch_row($query);
	$notescheck = $row[0];
	$sql = "SELECT id FROM notifications WHERE username='$log_username' AND date_time > '$notescheck' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$numrows = mysqli_num_rows($query);
    if ($numrows == 0) {
		$envelope = '<a href="notifications.php" title="Your notifications and friend requests"><img src="images/note_still.png" width="22" height="12" alt="Notes"></a>';
    } else {
		$envelope = '<a href="notifications.php" title="You have new notifications"><img src="images/note_flash.gif" width="22" height="12" alt="Notes"></a>';
	}
    $loginLink = '<a href="user.php?u='.$log_username.'">'.$log_username.'</a> &nbsp; &nbsp; <a href="logout.php">Log Out</a>';
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style/header.css">


        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,800bold' rel='stylesheet' type='text/css'>
    
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
 
       <div id="header">
       
                  <span onclick ="openNav()" style=padding-left:0em>&#9776;</span>
            
            <span style = padding-left:2em><a href = "index.php">Intern Pursuit</a></span>
        
            <button class = "button" style="width:auto;"><?php echo $loginLink;?></button>
           
           <button class = "button" style="width:auto;"><?php echo $envelope; ?></button>
           
                
       </div>
       
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   
    <a href="index.php">Home</a>           
<!--
    <?php echo $envelope; ?>
    <?php echo $loginLink; ?>
-->
    <a href = "#">About</a>
    <a href = "#">Support</a>
</div>       

       
<script>
function openNav(){
            
            document.getElementById('mySidenav').style.width = "100px";
            
            document.getElementById('main').style.marginLeft = "0px";
            
            document.body.style.backgroundColor = "rgba(248, 248, 255, 1)";
            
        }//End openNav
        
        function closeNav(){
            
            document.getElementById('mySidenav').style.width = "0";
            
            document.getElementById('main').style.marginLeft = "0";            
            
            document.body.style.backgroundColor = "rgba(248, 248, 255, 1)";
            
        }//End closeNav
</script>
       
    </body>
</html>