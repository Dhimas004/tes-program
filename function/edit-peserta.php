<?php
include '../class.php';
$peserta = new peserta;
$peserta->edit_peserta($_POST);
header('Location: ../index.php');
