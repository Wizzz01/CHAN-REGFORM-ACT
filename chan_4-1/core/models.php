<?php

require_once 'dbConfig.php';

function insertIntoTable($pdo, $first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account, $date_added) {

    $sql = "insert into software_engineer (first_name, last_name, email, favorite_programming_language, projects_made, github_account, date_added) values(?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account, $date_added]);
    
    if ($executeQuery) {
        return true;
    }
}

function seeAllRecords($pdo){
    $sql = "select * from software_engineer";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
}
}
?>