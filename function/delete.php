<?php 
    include '../class.php';
    $peserta = new peserta;
    $peserta->hapus_peserta($_POST['id_peserta']);
    header('Location: ../index.php');
