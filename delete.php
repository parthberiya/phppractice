<?php
require_once "dbconnection.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM contact_form WHERE id = $id";

    if (mysqli_query($conn , $sql)) {
        header('Location: view.php'); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>