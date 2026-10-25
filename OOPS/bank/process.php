<?php

require_once("connection.php");

class Bank extends Connection
{
    public function user_information($account_number)
    {
        $query = "SELECT * FROM users WHERE account_number='$account_number'";

        $result = mysqli_query($this->connection, $query);
        
        return mysqli_fetch_assoc($result);
    }

    public function deposit($account_number, $amount)
    {
        $query = "UPDATE users SET balance = balance + $amount WHERE account_number='$account_number'";

        if (mysqli_query($this->connection, $query))
        {
            return "Amount Deposited Successfully";
        }

        return "Deposit Failed";
    }

    public function withdraw($account_number, $amount)
    {
        $query = "SELECT balance FROM users
        WHERE account_number='$account_number'";

        $result = mysqli_query($this->connection, $query);

        $user = mysqli_fetch_assoc($result);

        if (!$user)
        {
            return "Account Not Found";
        }

        if ($user['balance'] >= $amount)
        {
            $query = "UPDATE users SET balance = balance - $amount WHERE account_number='$account_number'";

            mysqli_query($this->connection, $query);

            return "Amount Withdrawn Successfully";
        }

        return "Insufficient Balance";
    }

    public function show_user_account_information($account_number)
    {
        return $this->user_information($account_number);
    }
}

?>