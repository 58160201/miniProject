  <?php

      $host = "localhost";
      $user = "it58160175";
      $pass = "741852963";
      $db_name = "it58160175";

    $con = mysqli_connect($host , $user , $pass , $db_name);
   	if($con->query('SET NAMES UTF8')){
   		echo "string";
   	}

 ?>