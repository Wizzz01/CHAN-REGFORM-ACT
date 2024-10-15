<?php require_once '../core/dbConfig.php';?>
<?php require_once '../core/handleForms.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="document.location='index.php'">Return</button>

    <?php $getById = getById($pdo, $_GET['id']); ?>
    <form action="../core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <p>
        <label for="firstName">First name: </label>
        <input type="text" name="firstName" value="<?php echo $getById['first_name'];?>">
    </p>
    <p>
        <label for="lastName">Last name: </label>
        <input type="text" name="lastName" value="<?php echo $getById['last_name'];?>">
    </p>
    <p>
        <label for="email">Email: </label>
        <input type="text" name="email" value="<?php echo $getById['email'];?>">
    </p>
    <p>
        <label for="favoriteProgrammingLanguage">Favorite Programming Language: </label>
        <input type="text" name="favoriteProgrammingLanguage" value="<?php echo $getById['favorite_programming_language'];?>">
    </p>
    <p>
        <label for="projectsMade">Projects made: </label>
        <input type="text" name="projectsMade" value="<?php echo $getById['projects_made'];?>">
    </p>
    <p>
        <label for="githubAccount">Github Account: </label>
        <input type="text" name="githubAccount" value="<?php echo $getById['github_account'];?>">
    </p>
    <a href="../database.php"><input type="submit" name="editBtn" value="Edit" onclick="document.location='../database.php'"> </a>
</form>

</body>
</html>