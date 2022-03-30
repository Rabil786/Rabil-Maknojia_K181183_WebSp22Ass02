<html>
<head>
    <title>Login</title>
</head>
<body>
<?php
session_start();
if(($_POST["name"] == "rabil") && ($_POST["pass"] == "k181183")){
    $_SESSION["Login"] = "YES";
    echo "<h1>Login Successful</h1>";
    echo "<p><a href='document.php'>Link to protected file</a><p>";
}
else{
    $_SESSION["Login"] = "NO";
    echo "<h1>Wrong Email ID or Password</h1>";
    echo "<p><a href='document.php'>Link to protected file</a><p>";
}
?> 
</body>
</html>