<?php
require_once("../php_includes/db_conx.php");

    /*  
    This section deletes all accounts that do not activate after 3 days
    You do not want to weigh the database down with pointless data
    In the server go to Cron jobs and set up this file to go off daily or weekly (whatever you want)
    The command should look like "php/home/your_site_folder/public_html/cron_jobs/once_daily.php" 
    */

$sql = "SELECT id, username FROM users WHERE signup<=CURRENT_DATE - INTERVAL 3 DAY AND activated='0'";
$query = mysqli_query($db_conx, $sql);
$numrows = mysqli_num_rows($query);
if($numrows > 0){
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	  $id = $row['id'];
	  $username = $row['username'];
	  $userFolder = "../user/$username";
	  if(is_dir($userFolder)) {
          rmdir($userFolder);
      }
	  mysqli_query($db_conx, "DELETE FROM users WHERE id='$id' AND username='$username' AND activated='0' LIMIT 1");
	  mysqli_query($db_conx, "DELETE FROM useroptions WHERE username='$username' LIMIT 1");
    }
}
?>