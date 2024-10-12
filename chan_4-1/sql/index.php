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
    <action="core/handleForms.php" method ="POST">
        <p><Label for = "firstName">First Name</Label> <input type "text" name ="firstName"></p>
        <p><Label for = "lastName">Last Name</Label> <input type "text" name ="lastName"></p>
        <p><Label for = "email">Email</Label> <input type "text" name ="email"></p>
        <p><Label for = "favoriteProgrammingLanguage">Favorite Programming Language</Label> <input type "text" name ="favoriteProgrammingLanguage"></p>
        <p><Label for = "projectsMade">Projects Made</Label> <input type "number" name ="projectsMade"></p>
        <><Label for = "githubAccount">Github Account</Label> <input type "text" name ="githubAccount">
            <input type="submit" name="submit">
        </p>    
    </form>
    <a href =" 
</body>
</html>