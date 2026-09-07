<?php

session_start();

require_once("require/database_connection.php");

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";

    $result = mysqli_query($connection, $query) or die("Query Failed..! " . mysqli_error($connection));

    if (mysqli_num_rows($result) > 0) {

        $user = mysqli_fetch_assoc($result);

        $userId = $user['user_id'];

        $updateQuery = "UPDATE user SET is_online='1' WHERE user_id='$userId'";

        $updateResult = mysqli_query($connection, $updateQuery) or die("Query Failed..! " . mysqli_error($connection));

        if ($updateResult) {

            $user['is_online'] = 1;

            $_SESSION['user'] = $user;

            header("Location: ch_1.php");
            exit;
        }

    } else {

        header("Location: index.php?msg=Invalid Email or Password&color=red");
        exit;
    }

} else {

    header("Location: index.php");
    exit;
}

?>