<?php
include 'alertas.php';
session_start();
session_destroy();
$caminho2 = "../admin/index.php";
echo "<script type='text/javascript'>window.location.href='$caminho2';</script>";
