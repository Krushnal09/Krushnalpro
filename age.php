<?php
if(isset($_GET["age"]))
{
//solution
$age = $_GET["age"];
echo "<h2> Your Age:$age<h2>";
if ($age >= 18)
echo "<h1>Eligible for Voting!</h1>";
else
echo "<h1>Not Eligible for Voting!</h1>";
}
?>