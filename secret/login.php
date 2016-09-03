<?php

if (isset($_POST['username']))
{
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "testers" && $password == "doggyiscool")
{
echo "Well Done, You have logged in successfully!";
header("Location: ../ubercoolsiteforadminsomg.php");
} else {
echo "Sorry, The login information was incorrect!";
}
}

?>