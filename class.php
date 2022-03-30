<?php
DEFINE('host', 'localhost');
DEFINE('user', 'root');
DEFINE('pass', '');
DEFINE('db', 'db_nilai');
class database
{

    protected $koneksi;

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
        return $this->queryAssoc("SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '" . db . "' AND TABLE_NAME = '$table'")['AUTO_INCREMENT'];
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
        $this->query("INSERT INTO `db_nilai`.`tbl_perserta` (
        `nama_peserta`,
        `email_perserta`,
        `nilai`
      )
      VALUES
        (
          '$nama',
          '$email',
          '$nilai'
        )
      ");

        $this->query("INSERT INTO `db_nilai`.`tbl_nilai` (
        `nilai_x`,
        `nilai_y`,
        `nilai_z`,
        `nilai_w`
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
