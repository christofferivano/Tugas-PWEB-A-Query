<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://img.icons8.com/color/48/000000/source-code.png">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Pendaftaran Mahasiswa Baru | ITS Surabaya</title>
    <style>
        .back {
            width: 100px;
            margin: 20px 20px 0 20px;
            transition-duration: 0.4s;
        }

        a, a:link, a:visited, a:hover, a:active {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <button class="btn btn-info back" onclick="window.location.href='./'">Back</button>

    <div class="container mb-5">
        <h2 align="center" style="margin: 30px 10px 10px 10px;">Mahasiswa yang Sudah Mendaftar</h2> <hr />

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Sekolah Asal</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $sql = "SELECT * FROM calon_mahasiswa";
                    $query = mysqli_query($db, $sql);

                    while ($mahasiswa = mysqli_fetch_array($query)) {
                        echo "<tr>";

                        echo "<td>".$mahasiswa['id']."</td>";
                        echo "<td>".($mahasiswa['fotodiri'] == null ? "" : "<img src='uploads/" . $mahasiswa['fotodiri'] . "' width='120' height='160'>")."</td>";
                        echo "<td>".$mahasiswa['nama']."</td>";
                        echo "<td>".$mahasiswa['alamat']."</td>";
                        echo "<td>".$mahasiswa['jenis_kelamin']."</td>";
                        echo "<td>".$mahasiswa['agama']."</td>";
                        echo "<td>".$mahasiswa['sekolah_asal']."</td>";
                        echo "<td>".$mahasiswa['departemen']."</td>";

                        echo "<td>";
                        echo "<button class='btn btn-warning' style='margin-bottom: 5px' onclick=window.location.href='form-edit.php?id=".$mahasiswa['id']."'>Edit</button>";
                        echo "<br />";
                        echo "<button class='btn btn-danger' onclick=window.location.href='hapus.php?id=".$mahasiswa['id']."'>Hapus</button>";
                        echo "</td>";

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <h5>Total: <?php echo mysqli_num_rows($query) ?></h5>
    </div>
</body>
</html>