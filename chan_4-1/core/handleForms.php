<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['submit'])){
    $firstName =  $_POST['firstName'];
    $lastName =  $_POST['lastName'];
    $email =  $_POST['email'];
    $favoriteProgrammingLanguage =  $_POST['favoriteProgrammingLanguage'];
    $projectsMade =  $_POST['projectsMade'];
    $githubAccount =  $_POST['githubAccount'];
    $dateAdded =  $_POST['dateAdded'];

    $query = insertIntoTable($pdo, $first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account, $date_added);

    if ($query) {
        header ("Location: ../sql/index.php");
    }
    else {
        echo "Query Failed";
    }    
}

?>