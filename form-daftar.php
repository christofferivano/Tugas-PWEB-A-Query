<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://img.icons8.com/color/48/000000/source-code.png">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Formulir Pendaftaran Mahasiswa Baru | ITS Surabaya</title>
    <style>
        .back {
            width: 100px;
            margin: 20px 20px 0 20px;
            transition-duration: 0.4s;
        }
        .submit {
            width: 80px;
            margin-top: 10px;
            font-size: 17px;
        }
        textarea {
            resize: none;
        }
    </style>
</head>
<body>
    <button class="btn btn-info back" onclick="window.location.href='./'">Back</button>
    <div class="container mb-5">
        <h2 align="center" style="margin: 30px 10px 10px 10px;">Formulir Pendaftaran Mahasiswa Baru ITS</h2> <hr />
        <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input class="form-control" type="text" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="font-weight-bold">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" checked>
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="font-weight-bold">Agama</label>
                        <select class="form-control" name="agama" id="agama">
                            <option disabled selected>Pilih agama</option>
                            <option>Islam</option>
                            <option>Kristen Katolik</option>
                            <option>Kristen Protestan</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Kong Hu Cu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Sekolah Asal</label>
                        <input class="form-control" type="text" name="sekolah_asal" placeholder="Masukkan sekolah asal" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Departemen</label>
                        <select name="departemen" id="departemen" class="form-control">
                            <option selected disabled>Pilih Jurusan</option>
                            <option>Fisika</option>
                            <option>Matematika</option>
                            <option>Statistika</option>
                            <option>Kimia</option>
                            <option>Biologi</option>
                            <option>Aktuaria</option>
                            <option>Teknik Perkapalan</option>
                            <option>Teknik Sistem Perkapalan</option>
                            <option>Teknik Kelautan</option>
                            <option>Teknik Transportasi Laut</option>
                            <option>Teknik Mesin</option>
                            <option>Teknik Kimia</option>
                            <option>Teknik Fisika</option>
                            <option>Teknik Sistem dan Industri</option>
                            <option>Teknik Material</option>
                            <option>Teknik Elektro</option>
                            <option>Teknik Biomedik</option>
                            <option>Teknik Komputer</option>
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Teknologi Informasi</option>
                            <option>Teknik Sipil</option>
                            <option>Arsitektur</option>
                            <option>Teknik Lingkungan</option>
                            <option>Perencanaan Wilayah dan Kota</option>
                            <option>Teknik Geomatika</option>
                            <option>Teknik Geofisika</option>
                            <option>Desain Produk Industri</option>
                            <option>Desain Interior</option>
                            <option>Desain Komunikasi Visual</option>/
                            <option>Manajemen Bisnis</option>
                            <option>Studi Pembangunan</option>
                            <option>Manajemen Teknologi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Unggah Foto Diri</label>
                        <input type="file" class="form-control-file" id="fotodiri" name="fotodiri">
                    </div>
                    <button class="btn btn-success submit" type="submit" name="daftar" value="daftar">Daftar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>