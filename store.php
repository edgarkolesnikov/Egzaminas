<?php

include("includes/Header.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = 1;

    $query = "INSERT INTO form (name, surname, email, phone, subject, message, status) 
                VALUES(:name, :surname, :email, :phone, :subject, :message, :status)";
    $query_run = $conn->prepare($query);

    $data = [
        ':name' => $name,
        ':surname' => $surname,
        ':email' => $email,
        ':phone' => $phone,
        ':subject' => $subject,
        'message' => $message,
        'status' => $status
    ];
    $query_execute = $query_run->execute($data);

    header('Location: http://127.0.0.1:8000');
}

?>


