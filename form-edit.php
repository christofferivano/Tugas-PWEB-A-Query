<?php
    include("config.php");

    if (!isset($_GET['id'])) {
        header('Location: list-mahasiswa.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM calon_mahasiswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $mahasiswa = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        die("Data tidak ditemukan.");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://img.icons8.com/color/48/000000/source-code.png">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Formulir Edit Mahasiswa | ITS Surabaya</title>
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
    <button class="btn btn-info back" onclick="window.location.href='./list-mahasiswa.php'">Back</button>

    <div class="container mb-5">
        <h2 align="center" style="margin: 30px 10px 10px 10px;">Formulir Pendaftaran Mahasiswa Baru ITS</h2> <hr />

        <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                    <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>">

                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input class="form-control" type="text" name="nama" placeholder="Masukkan nama lengkap" value="<?php echo $mahasiswa['nama'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan alamat" required><?php echo $mahasiswa['alamat'] ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="font-weight-bold">Jenis Kelamin</label>
                        <div class="form-check">
                            <?php $gender = $mahasiswa['jenis_kelamin']; ?>
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" <?php echo ($gender == 'Laki-laki') ? "checked": "" ?>>
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-laki
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?php echo ($gender == 'Perempuan') ? "checked": "" ?>>
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <?php $agama = $mahasiswa['agama']; ?>
                        <label class="font-weight-bold">Agama</label>
                        <select class="form-control" name="agama" id="agama">
                            <option disabled>Pilih agama</option>
                            <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen Katolik') ? "selected": "" ?>>Kristen Katolik</option>
                            <option <?php echo ($agama == 'Kristen Protestan') ? "selected": "" ?>>Kristen Protestan</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Buddha') ? "selected": "" ?>>Buddha</option>
                            <option <?php echo ($agama == 'Kong Hu Cu') ? "selected": "" ?>>Kong Hu Cu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Sekolah Asal</label>
                        <input class="form-control" type="text" name="sekolah_asal" placeholder="Masukkan sekolah asal" value="<?php echo $mahasiswa['sekolah_asal'] ?>" required>
                    </div>

                    <div class="form-group">
                        <?php $jurusan = $mahasiswa['departemen']; ?>
                        <label class="font-weight-bold">Departemen</label>
                        <select name="departemen" id="departemen" class="form-control">
                            <option disabled>Pilih Jurusan</option>
                            <option <?php echo ($jurusan == 'Fisika') ? "selected": "" ?>>Fisika</option>
                            <option <?php echo ($jurusan == 'Matematika') ? "selected": "" ?>>Matematika</option>
                            <option <?php echo ($jurusan == 'Statistika') ? "selected": "" ?>>Statistika</option>
                            <option <?php echo ($jurusan == 'Kimia') ? "selected": "" ?>>Kimia</option>
                            <option <?php echo ($jurusan == 'Biologi') ? "selected": "" ?>>Biologi</option>
                            <option <?php echo ($jurusan == 'Aktuaria') ? "selected": "" ?>>Aktuaria</option>
                            <option <?php echo ($jurusan == 'Teknik Perkapalan') ? "selected": "" ?>>Teknik Perkapalan</option>
                            <option <?php echo ($jurusan == 'Teknik Sistem Perkapalan') ? "selected": "" ?>>Teknik Sistem Perkapalan</option>
                            <option <?php echo ($jurusan == 'Teknik Kelautan') ? "selected": "" ?>>Teknik Kelautan</option>
                            <option <?php echo ($jurusan == 'Teknik Transportasi Laut') ? "selected": "" ?>>Teknik Transportasi Laut</option>
                            <option <?php echo ($jurusan == 'Teknik Mesin') ? "selected": "" ?>>Teknik Mesin</option>
                            <option <?php echo ($jurusan == 'Teknik Kimia') ? "selected": "" ?>>Teknik Kimia</option>
                            <option <?php echo ($jurusan == 'Teknik Fisika') ? "selected": "" ?>>Teknik Fisika</option>
                            <option <?php echo ($jurusan == 'Teknik Sistem dan Industri') ? "selected": ""?>>Teknik Sistem dan Industri</option>
                            <option <?php echo ($jurusan == 'Teknik Material') ? "selected": "" ?>>Teknik Material</option>
                            <option <?php echo ($jurusan == 'Teknik Elektro') ? "selected": "" ?>>Teknik Elektro</option>
                            <option <?php echo ($jurusan == 'Teknik Biomedik') ? "selected": "" ?>>Teknik Biomedik</option>
                            <option <?php echo ($jurusan == 'Teknik Komputer') ? "selected": "" ?>>Teknik Komputer</option>
                            <option <?php echo ($jurusan == 'Teknik Informatika') ? "selected": "" ?>>Teknik Informatika</option>
                            <option <?php echo ($jurusan == 'Sistem Informasi') ? "selected": "" ?>>Sistem Informasi</option>
                            <option <?php echo ($jurusan == 'Teknologi Informasi') ? "selected": "" ?>>Teknologi Informasi</option>
                            <option <?php echo ($jurusan == 'Teknik Sipil') ? "selected": "" ?>>Teknik Sipil</option>
                            <option <?php echo ($jurusan == 'Arsitektur') ? "selected": "" ?>>Arsitektur</option>
                            <option <?php echo ($jurusan == 'Teknik Lingkungan') ? "selected": "" ?>>Teknik Lingkungan</option>
                            <option <?php echo ($jurusan == 'Perencanaan Wilayah dan Kota') ? "selected": "" ?>>Perencanaan Wilayah dan Kota</option>
                            <option <?php echo ($jurusan == 'Teknik Geomatika') ? "selected": "" ?>>Teknik Geomatika</option>
                            <option <?php echo ($jurusan == 'Teknik Geofisika') ? "selected": "" ?>>Teknik Geofisika</option>
                            <option <?php echo ($jurusan == 'Desain Produk Industri') ? "selected": "" ?>>Desain Produk Industri</option>
                            <option <?php echo ($jurusan == 'Desain Interior') ? "selected": "" ?>>Desain Interior</option>
                            <option <?php echo ($jurusan == 'Desain Komunikasi Visual') ? "selected": "" ?>>Desain Komunikasi Visual</option>/
                            <option <?php echo ($jurusan == 'Manajemen Bisnis') ? "selected": "" ?>>Manajemen Bisnis</option>
                            <option <?php echo ($jurusan == 'Studi Pembangunan') ? "selected": "" ?>>Studi Pembangunan</option>
                            <option <?php echo ($jurusan == 'Manajemen Teknologi') ? "selected": "" ?>>Manajemen Teknologi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Unggah Foto Diri</label>
                        <input type="file" class="form-control-file" id="fotodiri" name="fotodiri">
                    </div>

                    <button class="btn btn-success submit" type="submit" name="simpan" value="simpan">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>