<?php 

include __DIR__ . '/CertificateGd.php';
session_start();
$name = $_SESSION['name'];
$point = $_SESSION['point'];

$pngGenerator = new CertificateGd();
$pngGenerator -> generate($name, $point);

