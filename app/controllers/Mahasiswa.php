<?php

class Mahasiswa extends Controller {
  public function index()
  {
    $data['judul'] = "Mahasiswa";
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = "Detail Mahasiswa";
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if( $this->model('Mahasiswa_model')->tambahData($_POST) > 0){
      // setting flasher jika berharil
      Flasher::setFlash("berhasil","ditambahkan", "success");
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      // setting flasher jika gagal
      Flasher::setFlash("gagal", "ditambahkan", "danger");
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function hapus($id){
    // mengapus data
     if( $this->model('Mahasiswa_model')->hapusData($id) > 0){
      // setting flasher jika berharil
      Flasher::setFlash("berhasil","dihapus", "success");
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      // setting flasher jika gagal
      Flasher::setFlash("gagal", "dihapus", "danger");
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function setubah(){
    // $this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']);

    echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
  }

  public function ubah(){

      if( $this->model('Mahasiswa_model')->ubahData($_POST) > 0){
      // setting flasher jika berharil
      Flasher::setFlash("berhasil","diubah", "success");
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      // setting flasher jika gagal
      Flasher::setFlash("gagal", "diubah", "danger");
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

}