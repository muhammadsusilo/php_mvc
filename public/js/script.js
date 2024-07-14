// ketika documen sudah siap, jalankan function di dalamnya
$(function() {
  // untuk header tambah data
  $('.tombolTambahData').on('click', function () {
    // ubah header ke tambah data
    $('#tambahDataMahasiswa').html('Tambah Data Mahasiswa');
    // ambil button type submit dan ubah name buttonnya
    $('.modal-footer button[type=submit]').html('Tambah Data');

    $('modal-body form').attr(
      'action',
      'http://localhost/php_mvc_wpu/public/mahasiswa/tambah',
    );
  });

  // ambil class tamilmodalubah(edit)
  $('.tampilModalUbah').on('click', function () {
    // ambil class heder form dan ubah headernya
    $('#tambahDataMahasiswa').html('Ubah Data Mahasiswa');
    // ambil button type submit dan ubah name buttonnya
    $('.modal-footer button[type=submit]').html('Ubah Data');

    // ubah action
    $('modal-body form').attr(
      'action',
      'http://localhost/php_mvc_wpu/public/mahasiswa/ubah'
    );

    // ambil data-id yang di-click
    const id = $(this).data('id');
    
    $.ajax({
      url: 'http://localhost/php_mvc_wpu/public/mahasiswa/setubah',
      // ambil data
      data: { id: id },
      method: 'post',
      dataType: "json",
      success: function (data) {
        // ambil data
        $('#nama').val(data.name);
        $('#nim').val(data.nim);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      },
    });

  });

})