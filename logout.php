<?php
session_start();
session_destroy();

header("Location: SesionLogin.php");
exit();
?>