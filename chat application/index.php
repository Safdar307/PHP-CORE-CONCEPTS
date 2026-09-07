<?php

require_once('require/general.php');

$general = new General;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$general->site_title();?></title>

    <style>
        body{
            margin:0;
            font-family:Arial, Helvetica, sans-serif;
            background:#f4f4f4;
        }

        h1{
            text-align:center;
            margin-top:40px;
            color:#333;
        }

        hr{
            width:420px;
            margin-bottom:25px;
        }

        fieldset{
            width:400px;
            margin:auto;
            padding:20px;
            background:#fff;
            border:1px solid #ccc;
            border-radius:5px;
        }

        legend{
            font-size:20px;
            font-weight:bold;
            padding:0 8px;
        }

        table{
            width:100%;
        }

        td{
            padding:10px 5px;
        }

        input[type=email],
        input[type=password]{
            width:100%;
            padding:8px;
            border:1px solid #bbb;
            border-radius:4px;
            font-size:14px;
        }

        input[type=submit],
        input[type=reset]{
            padding:8px 18px;
            border:none;
            border-radius:4px;
            color:#fff;
            font-weight:bold;
            cursor:pointer;
        }

        input[type=submit]{
            background:#0d6efd;
        }

        input[type=submit]:hover{
            background:#0b5ed7;
        }

        input[type=reset]{
            background:#dc3545;
        }

        input[type=reset]:hover{
            background:#bb2d3b;
        }

        .message{
            text-align:center;
            font-weight:bold;
            margin-bottom:15px;
        }
    </style>

</head>
<body>

    <h1><i><?=$general->site_title();?></i></h1>
    <hr>

    <?php
    if(isset($_REQUEST['msg']) && isset($_REQUEST['color'])){
    ?>
        <p class="message" style="color:<?=$_REQUEST['color']?>">
            <?=$_REQUEST['msg']?>
        </p>
    <?php
    }
    ?>

    <form action="login.php" method="POST">

        <fieldset>

            <legend>Login</legend>

            <table>

                <tr>
                    <td><b>Email</b></td>
                    <td>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </td>
                </tr>

                <tr>
                    <td><b>Password</b></td>
                    <td>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="login" value="Login">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>

            </table>

        </fieldset>

    </form>

</body>
</html>