<?php
$_SESSION=$_GET['username'];
$_SESSION=$_GET['password'];
$usuario=$_GET['username'];
$password=$_GET['password'];
    if ($usuario=="admin" && $password=="admin") {
header ("Location: indexx.php");
echo "Usuari registrat";
} else {
echo "No registrat";
// header ("Location: indexx.php");
};
?>
<html>
<body>
<h2> Dades recollides del formulari </h2>

</body>
</html>
