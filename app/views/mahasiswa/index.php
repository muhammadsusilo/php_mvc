<div class="container mt-5">

<div class="row">
  <div class="col-lg-6">
    <?= Flasher::flash();?>
  </div>
</div>

  <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#tambahData">
    Tambah Mahasiswa
  </button>

<div class="row my-3">
  <div class="col-lg-6">

    <form action="<?= BASEURL; ?>/mahasiswa/search" method="post">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" name="keyword" id="keyword" autocomplete="off" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="tombolSearch">Search</button>
      </div>
    </div>
    </form>

  </div>
</div>

  <div class="row">
    <div class="col-6">
        <h3>Daftar Mahasiswa</h3>
        <!-- untuk mengecek apakah data dalam array jika tidak maka tampilkan array kosong -->
       <?php if (isset($data['mhs']) && is_array($data['mhs']) && !empty($data['mhs'])): ?>
        <!-- selanjutnya tampilkan data jika kosong -->
        <?php foreach ($data['mhs'] as $mhs): ?>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <?= $mhs['name']; ?>
              <div>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                  class="badge text-bg-primary rounded-pill">Detail</a>
  
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
                  class="badge text-bg-success rounded-pill tampilModalUbah" data-bs-toggle="modal"
                  data-bs-target="#tambahData" data-id="<?= $mhs['id']; ?>">Ubah</a>
  
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger rounded-pill"
                  onclick="return confirm('Anda yakin menghapusnya?')">Hapus</a>
              </div>
            </li>
          </ul>
        <?php endforeach; ?>

        <!-- jika data tidak di temukan -->
      <?php else: ?>
        <p>Tidak ada data ditemukan.</p>
      <?php endif; ?>
    </div>
  </div>

<!-- modal untuk tambah data mahasiswa -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataMahasiswa" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahDataMahasiswa">Tambah data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" id="id" name="id">

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nama" name="name">
            <label for="nama">Masukkan Nama</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="nim" name="nim" >
            <label for="nim">Masukkan Nim = 2024000</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email">
            <label for="email">Masukkan Email</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="jurusan" name="jurusan">
              <option selected>Silahkan Pilih jurusan</option>
              <option value="S1-Teknik Informatika">S1-Teknik Informatika</option>
              <option value="D3-Teknik Komputer">D3-Teknik Komputer</option>
              <option value="S1-Rekayasa Perangkat Lunak">S1-Rekayasa Perangkat Lunak</option>
              <option value="S1-Bussines International Scholl<">S1-Bussines International Scholl</option>
              <option value="S1-Akutansi">S1-Akutansi</option>
              <option value="S1-Teknologi Blockchain">S1-Teknologi Blockchain</option>
            </select>
            <label for="jurusan">Jurusan</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>

    </div>
  </div>
</div>