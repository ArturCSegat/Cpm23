<?php
if ($_REQUEST) {
    @session_start();
    @session_destroy();
    @session_abort();
    setcookie("conta_id","", time()-100000,"/");
    header('location:./home.php');
}
header('location:../home.php');
?>