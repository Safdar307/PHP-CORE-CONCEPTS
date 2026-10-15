<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        #heading{
            width: 100%;
            text-align: center;
        }
         h1{
                background-color: black;
                color:yellow;
                font-family: cursive;
                width: 300px;
            }
            fieldset{
                width: 300px;
                border-radius: 10px 0px 10px 0px;
            }
    </style>
</head>
<body>
    <h1 id="heading">FORMS</h1>
    <hr>

    <center>
        <a href="signup.php"><button>Sign UP</button></a>
        <a href="login.php"><button>LOGIN</button></a>
        <a href="reset.php"><button>Reset Password</button></a>
        <a href="forgot.php"><button>Forgot Password</button></a>
    
    </center>
</body>
</html>



<?php

class forms
{
    public $method = null;
    public $action = null;

    public function set_method($method)
    {
        $this->method = $method;
    }

    public function set_action($action)
    {
        $this->action = $action;
    }

    public function get_method()
    {
        return $this->method;
    }

    public function get_action()
    {
        return $this->action;
    }


    public function login_form()
    {
        ?>
        <center>
        <h1>Login Form</h1>
        <fieldset>
            <legend>Login Form</legend>
        <form method="<?php echo $this->get_method(); ?>" action="<?php echo $this->get_action(); ?>">
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td> <input type="password" name="password"></td>
            </tr>
            <tr>
                <td align="center" colspan="5">
                    <input type="submit" name="login" value="Login">
                </td>
            </tr>
        </table>
        </form>
         </fieldset>
        </center>
        <?php
    }


    public function signup_form()
    {
        ?>
        <center>
        <h1>Signup Form</h1>
        <fieldset>
            <legend>Signup Form</legend>
        <form method="<?php echo $this->get_method(); ?>" action="<?php echo $this->get_action(); ?>">
             
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th> Password</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td align="center" colspan="5">
                     <input type="submit" name="signup" value="Signup">
                </td>
            </tr>
        </table>
        </fieldset>
        </center>
        <?php
    }


    public function forgot_form()
    {
        ?>
        <center>
           
        <h1>Forgot Password</h1>
        <fieldset>
            <legend>Forgot Password</legend>
        <form method="<?php echo $this->get_method(); ?>" action="<?php echo $this->get_action(); ?>">
            <table>
                <tr>
                    <th>Email</th>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="5">
                         <input type="submit" name="forgot" value="Send">
                    </td>
                </tr>
            </table>
        </form>
        </fieldset>
        </center>
        <?php
    }

    public function reset_form()
    {
        ?>
        <center>
        <h1>Reset Password</h1>
        <fieldset>
            <legend>Reset Password</legend>
        <form method="<?php echo $this->get_method(); ?>" action="<?php echo $this->get_action(); ?>">
              <table>
                <tr>
                    <th>New Password</th>
                    <td>
                       <input type="password" name="new_password">
                    </td>
                </tr>
                <tr>
                    <th>Confirm Password</th>
                    <td>
                        <input type="password" name="confirm_password">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="5">
                        <input type="submit" name="reset" value="Reset Password">
                    </td>
                </tr>
              </table>
        </form>
        </fieldset>
        </center>
        <?php
    }
}

?>