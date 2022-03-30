<?php
DEFINE('host', 'localhost');
DEFINE('user', 'root');
DEFINE('pass', '');
DEFINE('db', 'db_nilai');
class database
{

  public $koneksi;

  public function __construct()
  {
    $this->koneksi = mysqli_connect(host, user, pass, db);
  }

  public function query($query)
  {
    return mysqli_query($this->koneksi, $query);
  }

  public function queryAssoc($query)
  {
    return mysqli_fetch_assoc($this->query($query));
  }

  public function getAutoIncrement($table)
  {
    return $this->queryAssoc("SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '" . db . "' AND TABLE_NAME = '$table'")['AUTO_INCREMENT'];
  }

  public function showAllData($query)
  {
    $result = mysqli_query($this->koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function insert($data)
  {
    $nama = $data['nama'];
    $email = $data['email'];
    $nilai_x = $data['nilai_x'];
    $nilai_y = $data['nilai_y'];
    $nilai_z = $data['nilai_z'];
    $nilai_w = $data['nilai_w'];
    $nilai = $this->getAutoIncrement('tbl_nilai');

    $this->query("INSERT INTO tbl_peserta (
        nama_peserta,
        email_peserta,
        nilai
      )
      VALUES
        (
          '$nama',
          '$email',
          '$nilai'
        )
      ");

    $this->query("INSERT INTO tbl_nilai (
        nilai_x,
        nilai_y,
        nilai_z,
        nilai_w
      )
      VALUES
        (
          '$nilai_x',
          '$nilai_y',
          '$nilai_z',
          '$nilai_w'
        )
      ");
  }
}

class peserta extends database
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get()
  {
    return $this->showAllData("SELECT * FROM tbl_peserta pa JOIN tbl_nilai nl ON pa.nilai = nl.id_nilai");
  }
}
