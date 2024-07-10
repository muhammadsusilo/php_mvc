<?php

class Mahasiswa_model
{
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
    $this->db->query("SELECT * FROM data_mhs WHERE id=:id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahData($data)
  {
    $query = "insert into data_mhs values('', :nama,:nim, :email, :jurusan)";

    $this->db->query($query);
    $this->db->bind("nama", $data['nama']);
    $this->db->bind("nim", $data['nim']);
    $this->db->bind("email", $data['email']);
    $this->db->bind("jurusan", $data['jurusan']);

    $this->db->execute();
    
    return $this->db->rowCount();
  }


}
