<div class="container mt-5"> 

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['mhs']['name']?></h5>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['mhs']['nim']?></h6>
      <p class="card-text"><?= $data['mhs']['email']?></p>
      <p class="card-text"><?= $data['mhs']['jurusan']?></p>
      <a href="<?= BASEURL;?>/mahasiswa" class="card-link btn bg-warning">Kembali</a>
    </div>
  </div>

</div>