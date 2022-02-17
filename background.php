<?php 
$color="";
session_start();
if(isset($_POST["enviar"])){
    $color = (isset($_POST["color"]))?$_POST["color"]:'';
    $_SESSION['color'] = "$color";
}else{
    $color = $_SESSION["color"] ;
}
print_r($_SESSION);
?>
