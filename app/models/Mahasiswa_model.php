<?php

class Mahasiswa_model
{
  // private $table = "data_mhs";
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
    $query = "insert into data_mhs(name,nim,email,jurusan)
              values( :name, :nim, :email, :jurusan)";

    $this->db->query($query);
    $this->db->bind("name", $data['name']);
    $this->db->bind("nim", $data['nim']);
    $this->db->bind("email", $data['email']);
    $this->db->bind("jurusan", $data['jurusan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusData($id) {
  
    $query = "delete from data_mhs where id = :id";
    $this->db->query($query);
    $this->db->bind("id", $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function ubahData($data)
  {
    $query = "UPDATE data_mhs set 
    name = :nama,
    nim = :nim,
    email = :email,
    jurusan = :jurusan
    where id = :id";

    $this->db->query($query);
    $this->db->bind("nama", $data['name']);
    $this->db->bind("nim", $data['nim']);
    $this->db->bind("email", $data['email']);
    $this->db->bind("jurusan", $data['jurusan']);
    $this->db->bind("id", $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }
  
}
