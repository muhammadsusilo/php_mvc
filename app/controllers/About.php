<?php

class About extends Controller{

  public function index($name = "Muhammad Susilo", $pekerjaan = "Pengusaha", $umur = 25)
  {
    $data = [
      'name' => $name,
      'pekerjaan' => $pekerjaan,
      'umur' => $umur,
      'judul' => 'About Me'
    ];
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  public function page()
  {
    $data['judul']= "Pages";
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}