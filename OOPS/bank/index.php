<?php

require_once("process.php");

$bank = new Bank();

$message = "";
$user = null;

if (isset($_POST['deposit']))
{
    $message = $bank->deposit(
        $_POST['account_number'],
        $_POST['amount']
    );
}

if (isset($_POST['withdraw']))
{
    $message = $bank->withdraw(
        $_POST['account_number'],
        $_POST['amount']
    );
}

if (isset($_POST['show']))
{
    $user = $bank-> show_user_account_information(
        $_POST['account_number']
    );

    if (!$user)
    {
        $message = "Account Not Found";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            background-color: black;
            color: yellow;
            font-family: cursive;
            padding: 20px;
        }
        .btndeposit{
            background-color: Green;
            color: white;
            border-radius: 3px;
        }
        .btnwithdraw{
            background-color: Red;
            color: white;
            border-radius: 3px;
        }
        .btninfo{
            background-color: orange;
            color: white;
            border-radius: 3px;
        }

    </style>
</head>
<body>

<h2 align="center">Bank Management System</h2>

<?php
if (!empty($message))
{
    echo "<h3 align='center'>$message</h3>";
}
?>

<form method="POST">

<table border="1" cellpadding="10" align="center">

    <tr>
        <td>Account Number</td>
        <td>
            <input type="text" name="account_number" required>
        </td>
    </tr>

    <tr>
        <td>Amount</td>
        <td>
            <input type="number" name="amount">
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">

            <input type="submit" name="deposit" value="Deposit" class="btndeposit">
            <input type="submit" name="withdraw" value="Withdraw" class="btnwithdraw">
            <input type="submit" name="show" value="Show Information" class="btninfo">

        </td>
    </tr>

</table>

</form>

<br>

<?php if ($user) { ?>

<table border="1" cellpadding="10" align="center">

    <tr>
        <th colspan="2">
            User Account Information
        </th>
    </tr>

    <tr>
        <td>Full Name</td>
        <td><?php echo $user['full_name']; ?></td>
    </tr>

    <tr>
        <td>Email</td>
        <td><?php echo $user['email']; ?></td>
    </tr>

    <tr>
        <td>Phone Number</td>
        <td><?php echo $user['phone_number']; ?></td>
    </tr>

    <tr>
        <td>Bank Account Number</td>
        <td><?php echo $user['account_number']; ?></td>
    </tr>

    <tr>
        <td>Bank Balance</td>
        <td><?php echo $user['balance']; ?></td>
    </tr>

</table>

<?php } ?>

</body>
</html>