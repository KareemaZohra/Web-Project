<?php
session_start();
session_destroy();
setcookie("normal", "", time()-3600);
header('Location:index.php');
?>