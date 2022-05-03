<?php
    //Logout Page for Admins
    session_start();
    //Closing session variables, validUser to false. (This kills the admin side of the program)
    session_unset();
    session_destroy();
    // close connection object - connections stay open until closed
    //$conn->close(); // close a database connection
    // redirect back to the site home page
    header("Location: login.php");
?>