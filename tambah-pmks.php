<?php

$title = 'Formulir PMKS';

include 'layout/header.php';

// // ambil data kecamatan sebagai pilihan input kecamatan
// $data_kecamatan = query("SELECT * FROM tbl_kecamatan ORDER BY id_kecamatan DESC");

// // ambil data desa sebagai pilihan input desa
// $data_desa = query("SELECT * FROM tbl_desa ORDER BY id_desa DESC");

// // ambil data kategori sebagai pilihan input kategori
// $data_kategori = query("SELECT * FROM tbl_kategori ORDER BY id_kategori DESC");



// // ketika tombol tambah ditekan jalankan script dibawah ini
// if (isset($_POST['tambah'])) {
//     if (tambah_pmks($_POST) > 0) {
//         echo "<script>
//         alert('Data PMKS Berhasil Ditambahkan');
//         document.location.href = 'data-pmks.php';
//         </script>";
//     } else {
//         echo "<script>
//         alert('Data PMKS Gagal Ditambahkan');
//         document.location.href = 'tambah-pmks.php';
//         </script>";
//     }
// }

?>

<!-- Body -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-user-plus"></i> Tambah PMKS</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Formulir PMKS</h6>
        </div>
        <div class="card-body">


            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="nik"><b>NIK</b></label>
                        <input type="number" name="nik" id="nik" class="form-control">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="no_kk"><b>No KK</b></label>
                        <input type="number" name="no_kk" id="no_kk" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="nama"><b>Nama</b></label>
                        <input type="text" name="nama" id="nama" class="form-control" required minlength="3">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="tempat"><b>Tempat Lahir</b></label>
                        <input type="text" name="tempat" id="tempat" class="form-control" required minlength="3">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="today"><b>Tanggal Lahir</b></label>
                        <input type="date" name="tanggal_lahir" id="today" class="form-control" required>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="umur"><b>Umur</b></label>
                        <input type="text" name="umur" id="umur" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="nama_ayah"><b>Nama Ayah</b></label>
                        <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" required minlength="3">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="nama_ibu"><b>Nama Ibu</b></label>
                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" required minlength="3">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="kecamatan_id"><b>Kecamatan</b></label>
                        <select name="kecamatan_id" id="kecamatan_id" class="form-control" required>
                            <option value="">-- pilih --</option>
                            <?php foreach ($data_kecamatan as $kecamatan) : ?>
                                <option value="<?= $kecamatan['id_kecamatan']; ?>"><?= $kecamatan['nama_kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="desa_id"><b>Desa</b></label>
                        <select name="desa_id" id="desa_id" class="form-control" required>
                            <option value="">-- pilih --</option>
                            <?php foreach ($data_desa as $desa) : ?>
                                <option value="<?= $desa['id_desa']; ?>"><?= $desa['nama_desa']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="kategori_id"><b>Kategori</b></label>
                        <select name="kategori_id" id="kategori_id" class="form-control" required>
                            <option value="">-- pilih --</option>
                            <?php foreach ($data_kategori as $kategori) : ?>
                                <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="foto"><b>Upload Foto</b> <small></small></label><br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="foto" onchange="previewImg()" required>
                            <label class="custom-file-label" for="foto">Pilih foto...</label>
                            <small>Format Foto harus png/jpg/jpeg</small>
                        </div>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="file"><b>Upload File</b> <small>(Surat Keterangan Tidak Mampu)</small></label><br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="file" onchange="previewImg()">
                            <label class="custom-file-label" for="file">Pilih file...</label>
                            <small>File harus PDF Max 2 MB</small>
                        </div>
                    </div>
                </div>

                <button type="submit" name="tambah" class="btn btn-primary btn-sm float-right ml-1">Tambah</button>
                <a href="data-pmks.php" class="btn btn-secondary btn-sm float-right">Kembali</a>

            </form>

        </div>

    </div>
</div>

<script type="text/javascript">

    window.onload=function(){
        $('#today').change(function() {
            var dob = new Date(this.value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            $('#umur').val(age);
        });
    }
</script>

<script type="text/javascript">
    function previewImg() {
        const gambar = document.querySelector('#foto');
        const gambarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<script type="text/javascript">
    function previewImg() {
        const gambar = document.querySelector('#file');
        const gambarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<?php include 'layout/footer.php'; ?>