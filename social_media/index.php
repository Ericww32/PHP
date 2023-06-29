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

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Intern Pursuit</title>
        
        <meta name = "viewport" content="width=device-width, initial-scale= 1">
        <link rel="stylesheet" type="text/css" href="style/Pivot_styles.css" >
        <link rel="stylesheet" type="text/css" href="style/jquery.mobile-1.4.5.css" >
        <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.4.5.js"></script>
        
    </head>
    
    <body>
        <?php include_once("template_PageTop.php"); ?>
        
        <script type="text/javascript">
        
    function initQuoteCarousel() {

    var $quotesWrapper = $(".cust-quotes");
    var $quotes = $quotesWrapper.find("blockquote");

    if (!$quotes.length) {
        return;
    }

    var selectNextQuote = function () {
        // keep move first quote in dom to the end to make continous
        var $quote = $quotesWrapper.find("blockquote:first").detach().appendTo($quotesWrapper);

        setTimeout(selectNextQuote, $quote.data("timeout"));
    };

    setTimeout(selectNextQuote, $quotes.filter(":first").data("timeout"));

}

$(function () {
    initQuoteCarousel();
});
    </script>
        
        <div id = "main" onclick="closeNav()">
<!--         <div id="pageMiddle">  -->    
             <div id = "image">
                    
             </div>
            
            <br /><br />

    <!--*******************************************************************-->
    <div>
  
       <hr><h2>Create An Account</h2><hr>
  <!--*******************************************************************-->      
    <a href = "http://www.pivotbusinessconsulting.com/" target="parent">
        <div id = "boxes2">
            <p>Employers</p>
            <div id = "info">
                <p>Start finding potential prospects and your new employee.</p>
            </div>
        </div>
    </a>
  <!--*******************************************************************-->      
    <a href = "http://www.pivotbusinessconsulting.com/" target="parent">
        <div id = "boxes">
            <p>Students</p>
            <div id = "info">
                <p>Start building your professional profile today! Click to join.</p>
            </div>
        </div>
    </a>
  <!--*******************************************************************-->
    <a href = "http://www.pivotbusinessconsulting.com/" target="parent">     
        <div id = "boxes3">
            <p>Schools</p>
            <div id = "info">
                <p>Partner with us to better provide students find their career.</p>
            </div>
        </div>
        </a>
  <!--*******************************************************************--> 
        </div>
  <!--*******************************************************************-->
            <br /><br /><hr>
    
    <div id = "test">
    <section id="testimonials">
        <h4 class="sec-head">Here Are What Others Had to Say&hellip;</h4>

        <div class="cust-quotes">
             <blockquote data-timeout="6000"><p>I have also used Pivot Consulting to supplement my clients’ staffing with exceptional and talented young professionals. Pivot’s screening process and training are top-notch where Pivot’s endorsement and recommendation are very reliable. I would recommend Isabella and Pivot Consulting to any business needing a fresh and creative solution to their business issues.</p><cite>Tim Hanley, CFO for Hire</cite></blockquote>
  
            <blockquote data-timeout="6000"><p>The development of our Intern Program continues to provide significant and ongoing cost savings for our organization. The cultivation of paid staff to be able to execute procedures required for the ongoing acquisition, training and retention of interns.</p><cite>Rosemary Steinbach, National Alliance for Mental Illness Greater Orlando</cite></blockquote>
  
            <blockquote data-timeout="6000"><p>Isabella has repeatedly shown keen insight and pragmatic knowledge of our business realm. She and her team have identified, formulated and developed integrated business plans for our organization and I would highly recommend her and her staff.</p><cite>David Hunter, Coldwell Banker NRT</cite></blockquote>
            
            <blockquote data-timeout="6000"><p>The fact that interns can take on projects of their preference and easily move to other departments within the company.  Also the opportunity to work directly with clients adds a great deal of responsibility to the projects, which makes you realize the importance of your work.</p><cite></cite></blockquote>
            
              <blockquote data-timeout="6000"><p>I am very impressed with Pivot Business Consulting and the real work opportunities that they provide to students.  Each student should have the opportunity for a quality internship like Pivot, guarantees through careful selection.screening of companies they work for.</p><cite></cite></blockquote>
        </div>
        
  </section>
    </div><hr><br />
        
            <h2>Here Are Some of Our Academic Partners</h2><hr><br /><br />
            
            <div id = "school_logos">
            
       <!--        <marquee scrollamount="120" behavior="slide" loop="1">
                    
                    <span><img src ="School%2520Logos/Asbury%20University.png"></span>
                    
                    <span><img src="School%2520Logos/Barry%20University.png"></span>
                    
                    <span><img src="Barry%20Law%20School.png"></span>
                        
                    <span><img src="School%2520Logos/Broward%20College.png"></span>
                    
                    <span><img src="School%2520Logos/FAU.png"></span>
                        
                    <span><img src="School%2520Logos/FIU%20-%202.png"></span>
                        
                </marquee>
                
                <marquee scrollamount="120" behavior="slide" loop="1" scrolldelay="120">
                    
                    <span><img src="School%2520Logos/Florida%20Southern.png"></span>
                        
                    <span><img src="Full%20Sail%20University.png"></span>
                        
                    <span><img src="School%2520Logos/MIami%20Dade%20College.png"></span>
                    
                    <span><img src="School%2520Logos/Miami%20Dade.png"></span>
                    
                    <span><img src="School%2520Logos/Palm%20Beach%20Atlantic.png"></span>
                    
                    <span><img src="School%2520Logos/Palm%20Beach%20State%20College.jpg"></span>
                
                </marquee>
                
                    <marquee scrollamount="120" behavior="slide" loop="1" scrolldelay = "240">
                        
                        <span><img src="Rollins%20Crummer.png"></span>
                        
                        <span><img src="Rollins%20Logo.png"></span>
                        
                        <span><img src="UCF%20logo.png"></span>
                         
                        <span><img src="School%2520Logos/Univ%20of%20Miami.png"></span>
            
                        <span><img src="Valencia%20College.png"></span>
                        
                         <span><img src="School%2520Logos/Webber%20International%20University.png"></span>
                        
                </marquee>-->
            
            </div>
       </div>
<!--
        </div>
    </div>
-->
            
    </body>
        <footer>
        <?php include_once("template_PageBottom.php"); ?>
    </footer>
</html>