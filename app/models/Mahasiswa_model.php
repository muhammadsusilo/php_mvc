<?php

class Mahasiswa_model {
  // private $mhs = [
  //   [
  //     'name' => 'Muhammad Susilo',
  //     'nim' => '1234567890',
  //     'email' => 'muhammadsusilo@gmail.com',
  //     'jurusan' => 'S1-Teknik Informatika'
  //   ],
  //   [
  //     'name' => 'Andika Saputra',
  //     'nim' => '9876543210',
  //     'email' => 'andikasaputra@gmail.com',
  //     'jurusan' => 'S1-Sistem Informasi'
  //   ]
  // ];

  private $dbh; // database handler
  private $statement;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, "root", "root");
    } catch (PDOException $e){
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->statement = $this->dbh->prepare("select * from data_mhs");
    $this->statement->execute();
    return $this->statement->fetchAll(PDO::FETCH_ASSOC);
  }

}
