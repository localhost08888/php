<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') 
{
    if (isset($_GET['username'])) 
    {
        $username = trim($_GET['username']);

        if (strlen($username) < 3) 
        {
            echo "Username is too short";
        } 
        else 
        {
            echo "Valid username";
        }
    }
}
?>
