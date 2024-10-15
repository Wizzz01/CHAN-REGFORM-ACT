<?php require_once '../core/dbConfig.php';?>
<?php require_once '../core/handleForms.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Are you sure you want to delete this user?</h1>
	<?php $getById = getById($pdo, $_GET['id']); ?>
	<form action="../core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getById['first_name']; ?></p>
			<p>Last Name: <?php echo $getById['last_name']; ?></p>
			<p>Email: <?php echo $getById['email']; ?></p>
			<p>Favorite Programming Language: <?php echo $getById['favorite_programming_language']; ?></p>
			<p>Projects Made: <?php echo $getById['projects_made']; ?></p>
			<p>Github Account: <?php echo $getById['github_account']; ?></p>
			<input type="submit" name="deleteBtn" value="Delete">
		</div>
	</form>
</body>
</html>