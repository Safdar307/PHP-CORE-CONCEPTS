<?php

session_start();

require_once("require/database_connection.php");

if (isset($_SESSION['user'])) {

    $userId = $_SESSION['user']['user_id'];

    $query = "UPDATE user SET is_online='0' WHERE user_id='$userId'";

    $result = mysqli_query($connection, $query) or die("Query Failed..! " . mysqli_error($connection));

    if ($result) {

        session_destroy();

        header("Location: index.php?msg=Logged Out Successfully..!&color=green");
        exit;
    }

} else {

    header("Location: index.php");
    exit;
}

?>