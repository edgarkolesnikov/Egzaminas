<?php
include("includes/Header.php");


if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];

    $query = "UPDATE form SET status = :status WHERE id = :id";
    $update = $conn->prepare($query);
    $data = [
        ':status' => $status,
        ':id' => $id
    ];

    $update->execute($data);
    header('Location: http://127.0.0.1:8000/list.php');
    echo "Success";
}