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
    <button onclick="document.location='index.php'">Return</button>
<table style="width:50%; margin-top: 150px; margin-left: 450px; text-align: center; border: 2px solid black; border-collapse:collapse;">
    <tr style = "border: 2px solid black;">
        <th style = "border: 2px solid black;">ID</th>
        <th style = "border: 2px solid black;">First Name</th>
        <th style = "border: 2px solid black;">Last Name</th>  
        <th style = "border: 2px solid black;">Email</th>
        <th style = "border: 2px solid black;">Favorite Programming Language</th>
        <th style = "border: 2px solid black;">Projects Made</th>
        <th style = "border: 2px solid black;">Github Account</th>
        <th style = "border: 2px solid black;">Date Added</th>
    </tr>
    <?php $seeAllRecords = seeAllRecords($pdo);?>
    <?php foreach($seeAllRecords as $row){?>
    <tr style = "border: 2px solid black;">
        <td style = "border: 2px solid black; padding: 1rem;"><?php echo $row['id'];?></td>
        <td style = "border: 2px solid black; padding: 1rem;"><?php echo $row['first_name'];?></td>
        <td style = "border: 2px solid black; padding: 1rem;"><?php echo $row['last_name'];?></td>
        <td style = "border: 2px solid black; padding: 1rem;"><?php echo $row['email'];?></td>
        <td style = "border: 2px solid black; padding: 1rem;"><?php echo $row['favorite_programming_language'];?></td>
        <td style = "border: 2px solid black; padding: 1rem;"><?php echo $row['projects_made'];?></td>
        <td style = "border: 2px solid black; padding: 1rem;"><?php echo $row['github_account'];?></td>
        <td style = "border: 2px solid black; padding: 1rem;"><?php echo $row['date_added'];?></td>
        <td style = "border: 2px solid black; padding: 1rem;">
            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
        </td>
        <td style = "border: 2px solid black; padding: 1rem;">
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>  
        </td>
    </tr>
    <?php }?> 
</table>    
</body>
</html>