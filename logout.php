<?php
session_start();
unset($_SESSION['voterid']);
session_destroy();
header("location:home.html");
exit;
?>