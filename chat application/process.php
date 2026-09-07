<?php

session_start();
date_default_timezone_set("Asia/Karachi");

require_once("require/database_connection.php");

if (!isset($_SESSION['user'])) {
    exit;
}

$action = $_REQUEST['action'] ?? '';

switch ($action) {

    case "send_message":

        $message = trim($_POST['message']);
        $userId = $_SESSION['user']['user_id'];

        if ($message == "") {
            exit;
        }

        $message = mysqli_real_escape_string($connection, $message);

        $query = "INSERT INTO chat(message,user_id,sent_on) VALUES('$message','$userId','" . time() . "')";

        if (mysqli_query($connection, $query)) {

            echo "<span style='color:green;'>Message Sent.</span>";

        } else {

            echo "<span style='color:red;'>Unable to send message.</span>";

        }

    break;





    case "show_messages":

        $currentUser = $_SESSION['user']['user_id'];

        $query = "SELECT * FROM chat INNER JOIN user ON chat.user_id=user.user_id ORDER BY chat.chat_id ASC";

        $result = mysqli_query($connection, $query);

        while($row=mysqli_fetch_assoc($result)){

            $mine = ($row['user_id'] == $currentUser);

            $class = $mine ? "message mine" : "message";

            $name = $mine
                ? $_SESSION['user']['first_name']." ".$_SESSION['user']['last_name']
                : $row['first_name']." ".$row['last_name'];

            $message = htmlspecialchars($row['message']);

            $time = date("h:i A",$row['sent_on']);

            echo '

            <div class="'.$class.'">

                <img src="require/profile_image/'.$row['profile_picture'].'">

                <div class="message-body">

                    <div class="message-name">'.$name.'</div>

                    <div class="message-text">'.$message.'</div>

                    <div class="message-time">'.$time.'</div>

                </div>

            </div>

            ';

        }

    break;



   case "show_users":

    $currentUser = $_SESSION['user']['user_id'];

    $query = "SELECT *
          FROM user
          ORDER BY
          (last_seen >= ".(time()-15).") DESC,
          last_seen DESC,
          first_name ASC";

    $result = mysqli_query($connection, $query);

    $currentTime = time();

    while ($user = mysqli_fetch_assoc($result)) {

        $lastSeen = (int)$user['last_seen'];
        if ($user['user_id'] == $currentUser) {

    $statusClass = "online";
    $statusText = "● Online (You)";

} else {

    if (($currentTime - $lastSeen) <= 15) {

        $statusClass = "online";
        $statusText = "● Online";

    } else {

        $statusClass = "offline";

        if ($lastSeen == 0) {

            $statusText = "Last seen: Never";

        } elseif (date("Y-m-d", $lastSeen) == date("Y-m-d")) {

            $statusText = "Last seen " . date("h:i A", $lastSeen);

        } elseif (date("Y-m-d", $lastSeen) == date("Y-m-d", strtotime("-1 day"))) {

            $statusText = "Yesterday " . date("h:i A", $lastSeen);

        } else {

            $statusText = "Last seen " . date("d M Y h:i A", $lastSeen);

        }

    }

}

        echo '

<div class="user-card">

    <img class="user-avatar" src="require/profile_image/'.$user['profile_picture'].'">

    <div class="user-text">

        <div class="user-fullname">'.$user['first_name'].' '.$user['last_name'].'</div>

        <div class="user-status '.$statusClass.'">'.$statusText.'</div>

    </div>

</div>

';

    }

break;



    case "update_status":

    $userId = $_SESSION['user']['user_id'];

    $query = "UPDATE user
              SET
                  is_online='1',
                  last_seen='".time()."'
              WHERE user_id='$userId'";

    mysqli_query($connection,$query);

    echo "OK";

break;

    default:

        echo "Invalid Request";

    break;
}

?>