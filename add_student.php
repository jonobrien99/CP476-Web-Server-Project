<?php
    require_once 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $studentID = $_POST['student_id'];
        $studentName = $_POST['student_name'];

        addStudent($studentID, $studentName);
        header('Location: index.php'); //redirect

        exit;
    }
?>