<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['submitRecord'])){
    
    $first_name =  $_POST['firstName'];  
    $last_name =  $_POST['lastName'];   
    $email =  $_POST['email'];
    $favorite_programming_language =  $_POST['favoriteProgrammingLanguage']; 
    $projects_made =  $_POST['projectsMade']; 
    $github_account =  $_POST['githubAccount']; 

   
    $query = insertIntoTable($pdo, $first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account);

    if ($query) {
        header("Location: ../sql/index.php");
    } else {
        echo "Query Failed";
    }    
}

if(isset($_POST['editBtn'])){
    $id =  $_GET['id'];
    $first_name =  $_POST['firstName'];  
    $last_name =  $_POST['lastName'];   
    $email =  $_POST['email'];
    $favorite_programming_language =  $_POST['favoriteProgrammingLanguage']; 
    $projects_made =  $_POST['projectsMade']; 
    $github_account =  $_POST['githubAccount']; 

    $query = updateUser($pdo, $id, $first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account);

    if ($query) {
        header("Location: ../sql/database.php");
    } else {
        echo "Update Failed";
    }    
}

if(isset($_POST['deleteBtn'])){
    $id =  $_GET['id'];
    $query = deleteUser($pdo, $id);

    if ($query) {
        header("Location: ../sql/database.php");
    } else {
        echo "Delete Failed";
    }    
}
?>
