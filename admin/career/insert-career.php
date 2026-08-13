<?php
require '../includes/auth.php';
require '../db.php';

if (isset($_POST['submit_career'])) {
    // Collect and sanitize form input data
    $title         = trim($_POST['title']);
    $location      = trim($_POST['location']);
    $education     = trim($_POST['education']);
    $salary        = trim($_POST['salary']);
    $experience    = trim($_POST['experience']);
    $totalposition = (int)$_POST['totalposition'];
    $requirement   = trim($_POST['requirement']);
    $skill         = trim($_POST['skill']);

    try {
        // SQL query execution with prepared placeholders
        $sql = "INSERT INTO carrer (title, location, education, salary, experience, totalposition, requirement, skill) 
                VALUES (:title, :location, :education, :salary, :experience, :totalposition, :requirement, :skill)";
        
        $stmt = $pdo->prepare($sql);
        
        $execute = $stmt->execute([
            ':title'         => $title,
            ':location'      => $location,
            ':education'     => $education,
            ':salary'        => $salary,
            ':experience'    => $experience,
            ':totalposition' => $totalposition,
            ':requirement'   => $requirement,
            ':skill'         => $skill
        ]);

        if ($execute) {
            header("Location: add-career.php?status=success");
            exit;
        } else {
            header("Location: add-career.php?status=error");
            exit;
        }

    } catch (PDOException $e) {
        // Fail-safe error tracking
        header("Location: add-career.php?status=error");
        exit;
    }
} else {
    // Redirect back if page is accessed directly without form submission
    header("Location: add-career.php");
    exit;
}