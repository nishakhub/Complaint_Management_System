<?php
session_start();
session_destroy();
header("Location: mypage.php");
?>
