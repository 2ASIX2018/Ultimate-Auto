<?php
session_start();
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$usuario=$_SESSION['username'];
$password=$_SESSION['password'];
$recordar=$_POST['recordar'];
if ($usuario=="admin") {
   $_SESSION['role']="admin";
} else { if ($usuario=="")
    $_SESSION['role']="user";
}
if($recordar=="recordar") {
    setcookie('UltimateAutoUser', $_SESSION["username"], time() + 365 * 24 * 60 * 60);
    setcookie('UltimateAutoRole', $_SESSION["role"], time() + 365 * 24 * 60 * 60);
  //  echo "Recordat";
}
if ($usuario=="admin" && $password=="admin") {
 header ("Location: indexx.php");
echo "Usuari registrat";
} else {
echo "No registrat";
 header ("Location: entrar2.php");
};

if ($usuario=="user" && $password=="user") {
 header ("Location: indexx.php");
} else {
echo "No registrat";
 header ("Location: entrar2.php");
};

?>

