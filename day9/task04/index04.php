<!doctype html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title> Task 04</title>
</head>
<body>
<?php
require ("task04.php");
$body = whoami();
echo $body;
?>
</body>
</html>
<!-- curl -d "name=Jane&age=21" -H "Content-Type: application/x-www-form-urlencoded" -X POST http://localhost:9000/index04.php-->