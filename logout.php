<?php
require 'config.php';
$_SESSON =[];
session_unset();
session_destroy();
header("Location: login.php"); //ngarahin ke halaman login
?>