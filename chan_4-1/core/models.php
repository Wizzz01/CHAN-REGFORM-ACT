<?php

require_once 'dbConfig.php';

function insertIntoTable($pdo, $first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account) {

    $sql = "INSERT INTO software_engineer (first_name, last_name, email, favorite_programming_language, projects_made, github_account) VALUES(?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account]);
    
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

function getById($pdo, $id){
    $sql = "SELECT * from software_engineer WHERE id =?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$id])){
        return $stmt->fetch();
    }
}

function updateUser($pdo, $id, $first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account) {

    $sql = "UPDATE software_engineer 
        SET first_name = ?, 
            last_name = ?, 
            email = ?, 
            favorite_programming_language = ?, 
            projects_made = ?, 
            github_account = ?
        WHERE id = ?"; 
        
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $favorite_programming_language, $projects_made, $github_account, $id]);
    
    if ($executeQuery) {
        return true;
    }
}

function deleteUser($pdo, $id){
    $sql = "DELETE FROM software_engineer WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$id]);
    if ($executeQuery) {
        return true;
    }
}
?>