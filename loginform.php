<?php 
session_start();
?>


<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="loginform.css">
    <title>loginform</title>
</head>
<center><img src="logo2.png" alt="logo"></center>
<body>
    <div class="login">

        <h1>WEBCHAT</h1>

        <form method="post" action="loginclass.php">
            <input type="text" name="name"  required="required" placeholder="NAME" />
            <input type="email" name="email" required="required" placeholder="EMAIL" />
            <button type="submit" class="btn btn-primary btn-block btn-large" value="Login">Enter Webchat.</button>
        </form>




       <center><table border="0" align="center">
       <tr>
        <td align="center"><h5><font color="#66FFCC"><u>creat by : </u></font></h5></td>
       
        </tr>
        <tr>

        <td align="left"><h6><font color="#FFFFFF">Thitivut Jiratrakulprom 58160175</font></h6></td>
       
        </tr>
        <tr>
        <td align="left"><font color="#FFFFFF"><h6>Phensuda Ta-ut 58160186</font></h6></td>
       
        </tr>
        <tr>
        <td align="left"><font color="#FFFFFF"><h6>Sophon Srichandee 58160201</font></h6></td>
       
        </tr>
            
        </table></center>
     <!--   <center><h5>creat by : </h5></center> 
       
       <h5>Thitivut Jiratrakulprom 58160175 <br> 
       Phensuda ta-ut 58160186  <br>
       Sophon Srichandee 58160201</h5> <br>
 -->
    </div>



</body>

</html>