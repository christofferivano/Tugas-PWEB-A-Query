<?php
    include("config.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "SELECT fotodiri FROM calon_mahasiswa WHERE id=$id";
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_array($query);

        if (is_file("uploads/" . $data['fotodiri'])) {
            unlink("uploads/" . $data['fotodiri']);
        }

        $sql = "DELETE FROM calon_mahasiswa WHERE id=$id";
        $query = mysqli_query($db, $sql);
        
        if ($query) {
            header('Location: list-mahasiswa.php');
        }

        else {
            die("Gagal menghapus.");
        }
    }

    else {
        die("Akses dilarang!");
    }
?>