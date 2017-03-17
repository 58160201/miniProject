<?php
			include("db.php");

			session_start();
			
         $name = $_POST['name'];
			$email = $_POST['email'];

         $_SESSION['name'] = $name;
         $_SESSION['email'] = $email;


            if ($_POST['name'] != '' && $_POST['email'] != '') {
               header("location:ajax-chat.php");
            }else{
               echo "Can't Connect to Chat Room";
            }
?>