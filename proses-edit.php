<?php
    include("config.php");

    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
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

        if (empty($foto)) {
            $sql = "UPDATE calon_mahasiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$gender', agama='$agama', sekolah_asal='$sekolah', departemen='$jurusan' WHERE id=$id";
            $query = mysqli_query($db, $sql);

            if ($query) {
                ?> <script> 
                    alert("Data telah disimpan.");
                    window.location.href='./list-mahasiswa.php';
                    </script> <?php
            }

            else {
                die("Gagal menyimpan.");
            }
        }

        else {
            if (move_uploaded_file($tmp, $path)) {
                $sql = "SELECT fotodiri FROM calon_mahasiswa WHERE id=$id";
                $query = mysqli_query($db, $sql);
                $data = mysqli_fetch_array($query);
    
                if (is_file("uploads/" . $data['fotodiri'])) {
                    unlink("uploads/" . $data['fotodiri']);
                }
    
                $sql = "UPDATE calon_mahasiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$gender', agama='$agama', sekolah_asal='$sekolah', departemen='$jurusan', fotodiri='$fotobaru' WHERE id=$id";
                $query = mysqli_query($db, $sql);
    
                if ($query) {
                    ?> <script> 
                        alert("Data telah disimpan.");
                        window.location.href='./list-mahasiswa.php';
                        </script> <?php
                }
    
                else {
                    die("Gagal menyimpan.");
                }
            }
    
            else {
                ?> <script>
                        alert("Foto gagal disimpan.");
                        window.location.href='./list-mahasiswa.php';
                    </script> <?php
            }
        }
    }

    else {
        die("Akses dilarang!");
    }
?>