<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["userName"] = "Dhoha";
$_SESSION["email"] = "raihanahit2016@gmail.com";
$_SESSION["gender"] = "female";
echo "Session variables are set. <br> ";
foreach($_SESSION as $key => $value){
    echo $key.' : '.$value.'<br/>';
}
?>

</body>
</html>