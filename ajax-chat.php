
<!DOCTYPE html>
<html>
<?php



 session_start();

$_SESSION['name']; 
$_SESSION['email']; 


?>


<head>
<center><img src="logo2.png" width="250" height="120"></center>
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    <title>AJAX WEBCHAT</title>

    <link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css" />
    <link rel="stylesheet" type="text/css" href="css/page.css" />
    <link rel="stylesheet" type="text/css" href="css/chat.css" />

</head>

<body>
    <div id="chatContainer">

        <div id="chatTopBar" class="rounded"></div>
        <div id="chatLineHolder"></div>

        <div id="chatUsers" class="rounded"></div>
        <div id="chatBottomBar" class="rounded">
            <div class="tip"></div>
<?php if($_SESSION['name'] == NULL){?>
            <input type="button" value="Login">
           
<?php }else{ ?> 
            <form id="loginForm" method="post" action="">
    
                <input type="hidden" id="name" name="name" maxlength="16" value="<?php echo $_SESSION['name']; ?>" />
                <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" />
                <input type="submit" class="blueButton" value="Start Chat" />
            </form>
            <form id="submitForm" method="post" action="">
                <input id="chatText" name="chatText" class="rounded" maxlength="255" />
                <input type="submit" class="blueButton" value="Submit" />
            </form>
 <?php } ?>
        </div>

    </div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="js/jScrollPane/jquery.mousewheel.js"></script>
    <script src="js/jScrollPane/jScrollPane.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>