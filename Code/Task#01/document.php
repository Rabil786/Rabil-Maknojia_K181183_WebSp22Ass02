<html>
<head>
    <title>Document</title>
</head>
<body>
<?php
session_start();
if($_SESSION["Login"] != "YES"){
    header("Location: form.php");
}
?> 
<h1>This document is protected</h1>
<p>You can only see it if you are logged in.</p>
</body>
</html>