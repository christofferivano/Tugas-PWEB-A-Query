<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/png" href="https://img.icons8.com/color/48/000000/source-code.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Pendaftaran Mahasiswa Baru | ITS Surabaya</title>
    <style>
        body {
            font-family: 'Poppins';
            text-align: center;
            justify-content: center;
            background-color: #000075;
        }
        h1 {
            font-size: 42px;
            margin-bottom: 20px;
            color: white;
            font-weight: bold;
        }
        h3 {
            font-size: 25px;
            margin-bottom: 15px;
            color: white;
            font-weight: bold;
        }
        button {
            margin-left: 10px;
            margin-right: 10px;
            transition-duration: 0.4s;
        }
        .container {
            top: 50%;
            left: 50%;
            position: absolute;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            -webkit-animation: fadein 1.5s;
            -moz-animation: fadein 1.5s;
            animation: fadein 1.5s;
        }
        @keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
        @-moz-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Mahasiswa Baru</h1>
        <h3>Institut Teknologi Sepuluh Nopember Surabaya</h3>
        
        <img src="LOGO ITS.png" alt="Logo ITS" width="200px" style="margin-bottom: 35px">
        <center>
            <button class="btn btn-info" onclick="window.location.href='./form-daftar.php'">Daftar Baru</button>
            <button class="btn btn-info" onclick="window.location.href='./list-mahasiswa.php'">Pendaftar</button>
        </center>
    </div>
</body>
</html>