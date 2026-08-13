<?php
require '../includes/auth.php';
require '../db.php';

if(isset($_POST['update_career']))
{

    $sql="UPDATE carrer SET

    title=:title,
    location=:location,
    education=:education,
    salary=:salary,
    experience=:experience,
    totalposition=:totalposition,
    requirement=:requirement,
    skill=:skill

    WHERE id=:id";

    $stmt=$pdo->prepare($sql);

    $stmt->execute([

        ':title'=>trim($_POST['title']),
        ':location'=>trim($_POST['location']),
        ':education'=>trim($_POST['education']),
        ':salary'=>trim($_POST['salary']),
        ':experience'=>trim($_POST['experience']),
        ':totalposition'=>$_POST['totalposition'],
        ':requirement'=>trim($_POST['requirement']),
        ':skill'=>trim($_POST['skill']),
        ':id'=>$_POST['id']

    ]);

    header("Location: career-list.php");
    exit;
}
