<?php require_once '../core/dbConfig.php';?>
<?php require_once '../core/handleForms.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family:"Arial";
        }
        input{
            font-size: 1.5em;
            height:50px;
            width:200px;
        }
    </style>
</head>
<body>
    <h2>Welcome! Please register below future software engineer!</h2>

    <button style="padding:1rem; margin: 1rem; font-size: 17px; text-align: center;" onclick="document.location='register.php'">Register</button>

    <h2>Preview database</h2>

    <button style="padding:1rem; margin: 1rem; font-size: 17px; text-align: center;" onclick="document.location='database.php'">View database</button>

</body>
</html>