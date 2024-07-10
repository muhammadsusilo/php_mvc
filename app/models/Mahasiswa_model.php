<?php

class Mahasiswa_model {
  private $table = "data_mhs";
  private $db;

  public function __construct()
  {
    $this->db = new Database();

  }

  public function getAllMahasiswa()
  {
    $this->db->query("select * from data_mhs");
    return $this->db->resultSet();
  }

public function getMahasiswaById($id)
{
  $this->db->query("SELECT * FROM data_mhs WHERE id=:id" );
  $this->db->bind('id', $id);
  return $this->db->single();
}

}
