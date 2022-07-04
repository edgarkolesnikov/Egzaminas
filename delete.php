<?php
include("includes/Header.php");


if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM form WHERE id = :id";
    $delete = $conn->prepare($query);
    $data = [
        ':id' => $id
    ];

    $delete->execute($data);
    header('Location: http://127.0.0.1:8000/list.php');
    echo "Success";
}