<?php

class Flasher {

  public static function setFlash($pesan, $aksi, $tipe)
  {
    // pengecekan terlebih dahulu
    $_SESSION['flash'] = [
      "pesan" => $pesan,
      "aksi" => $aksi,
      "tipe" => $tipe
    ];
  }

// pengecekan flash jika ada di halaman
public static function flash(){
  if ( isset($_SESSION['flash']) ){
    // jika ada
    echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Mahasiswa
            <strong>' . $_SESSION['flash']['pesan'] . '</strong> 
             '. $_SESSION['flash']['aksi'] .'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          // hapus flash setelah tampil atau tampil jika 1 kali
          unset($_SESSION['flash']);

  } else {
    // jika tidak ada

  }
}

}