<?php

include "config.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `employee` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record deleted successfully.";

        header('Location: index.php');
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}