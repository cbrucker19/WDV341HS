
   
<?php
session_start(); // allows access to the application session
    
    $validUser = false;     // invalid user until signed on
    $errMsg = "";           // global error message variable

    // Condition runs once the form has been submitted
    if(isset($_POST['submit'])){
        //echo"form has been submitted";

        // Processing the login information against the database

        //  variables
        $loginName = $_POST['loginName'];
        $loginPW = $_POST['password'];
        

        try {
			// CONNECT to the database	
            require '../connectPDO.php';	
            
            // Create the SQL command string
            $sql = "SELECT event_user_name, ";
            $sql .= "event_user_password ";
            $sql .= "FROM event_user ";
            $sql .= "WHERE event_user_name=:userName ";
            $sql .= "AND event_user_password=:userPW";
            
            // PREPARE the SQL statement
            $stmt = $conn->prepare($sql);
             
            // BIND the values to the input parameters of the prepared statement
             $stmt->bindParam(':userName', $loginName);
             $stmt->bindParam(':userPW', $loginPW);		
            
            // EXECUTE the prepared statement
            $stmt->execute();	
            
            // PDO FETCHALL stores any valid rows in the $resultArray variable
            $resultArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Store number of matched rows in variable
            $numRows = count($resultArray);
            
            /* Condition sets user session variable and valid user variable
                to true allowing the admin options to be displayed.  Else
                will display an error message and redisplay the form.
            */
            if($numRows == 1){
                // set a session variable
                $_SESSION['validUser'] = true;
                // valid user
                $validUser = true;   
            }else{
                $errMsg = "Invalid user name or password. Please try again.";
            }
        }
        
        catch(PDOException $e)
        {
            $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
            error_log($e->getMessage());			
        }
    } 
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: 15 || End Date: 15 -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Login Page'>
<title>Login Page</title>
</head>
<body>
<h1 class="text-center">Event Sign On Page</h1>
        <h2 class="text-center">WDV341 Intro PHP</h2>

<?php
        /*
            If you have a valid user display this block 1
            else display block 2.
        */

    if($validUser){
?> 
        <h3 class="text-center">Welcome to the Admin Area for Valid Users</h3>

        <p>You have the following option available as an administrator</p>

        <ol>
            <li><a href="eventForm.php">Input new events</a></li>
            <li>Delete events</li>
            <li>Select events to update</li>
            <li><a href="logoutH.php">Log off the admin system</a></li>
        </ol>
        

<?php
    }else{
        echo "<h3 class='text-center text-danger'>$errMsg</h3>"
?>

         <form method="post" action="loginH.php">
            <label for="loginName">User Name </label>
            <input type="text" class="form-control form-control-sm"name="loginName" id="loginName"><br>

            <label for="password">Password</label>
             <input type="password" class="form-control form-control-sm"name="password" id="password"><br>

            <input type="submit" class="bg-primary text-light rounded-sm" name="submit" value="Sign On"><br>
            <input type="reset">
        </form>
<?php                      
        }
?>
</body>
</html>