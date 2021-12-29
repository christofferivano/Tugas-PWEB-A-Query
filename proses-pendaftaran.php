<?php
    include("config.php");

    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];
        $jurusan = $_POST['departemen'];
        $foto = $_FILES['fotodiri']['name'];
        $tmp = $_FILES['fotodiri']['tmp_name'];

        $fotobaru = date('dmYHis') . $foto;
        $path = "uploads/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $sql = "INSERT INTO calon_mahasiswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, departemen, fotodiri) VALUE ('$nama', '$alamat', '$gender', '$agama', '$sekolah', '$jurusan', '$fotobaru')";
            $query = mysqli_query($db, $sql);

            if ($query) {
                ?> <script> 
                    alert("Data telah disimpan.");
                    window.location.href='./index.php?status=sukses';
                    </script> <?php
            }

            else {
                ?> <script>
                    alert("Data gagal disimpan.");
                    window.location.href='./index.php?status=gagal';
                    </script> <?php
            }
        }

        else {
            ?> <script>
                    alert("Foto gagal disimpan.");
                    window.location.href='./form-daftar.php';
                </script> <?php
        }
    }

    else {
        die("Akses dilarang!");
    }
?>