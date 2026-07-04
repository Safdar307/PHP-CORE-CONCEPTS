<?php

require_once("connection.php");

$cnic = $_GET['cnic'];

$query = "SELECT * FROM employee WHERE cnic='$cnic'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);

    echo "
    <table border='1' cellpadding='8' cellspacing='0'>

        <tr>
            <th>ID</th>
            <td>{$row['id']}</td>
        </tr>

        <tr>
            <th>Name</th>
            <td>{$row['first_name']} {$row['last_name']}</td>
        </tr>

        <tr>
            <th>CNIC</th>
            <td>{$row['cnic']}</td>
        </tr>

        <tr>
            <th>Email</th>
            <td>{$row['email']}</td>
        </tr>

        <tr>
            <th>Phone</th>
            <td>{$row['phone_no']}</td>
        </tr>

        <tr>
            <th>City</th>
            <td>{$row['city']}</td>
        </tr>

        <tr>
            <th>Image</th>
            <td>
                <img src='images/{$row['image']}' width='100'>
            </td>
        </tr>

    </table>
    ";
}
else
{
    echo "<h3>Match Not Found</h3>";
}

?>