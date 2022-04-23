<?php
session_start();
session_unset();
session_destroy();

header("Location: loginH.php");
    
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: 15 || End Date: 15 -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Logout Page'>
<title>LogOutPage</title>
</head>
<body>
</body>
</html>