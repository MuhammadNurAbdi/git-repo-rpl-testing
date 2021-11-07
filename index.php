    <?php
    $databaseHost = 'localhost';
    $databaseName = 'biodata_mahasiswa';
    $databaseUsername = 'root';
    $databasePassword = '';
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    ?>

    <!DOCTYPE html>
    <html lang="en" style="scroll-behavior:smooth">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Akademik</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src=" https://kit.fontawesome.com/156ef3b01c.js" crossorigin="anonymous"></script>

        <style>
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
    </head>

    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <i class="fab fa-stumbleupon-circle"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Form Input<span class="sr-only">(current)</span></a>
                    <a class="nav-link active" href="#data">Data Mahasiswa</a>
                </div>
            </div>
        </nav>
        <br><br>

        <div class="container">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Biodata Mahasiswa</h1>
                    <p class="lead">Info Biodata Mahasiswa.</p>
                </div>
            </div>
            <form method="post" name="form">
                <div class="form-row" id="input">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama Lengkap</label>
                        <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" placeholder="Nama Lengkap Mahasiswa" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputNIM">NIM</label>
                        <input type="number" name="nim_mhs" class="form-control" id="nim_mhs" web placeholder="Nomor Induk Mahasiswa" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="almt_mhs" class="form-control" id="almt_mhs" placeholder="Contoh : Jalan Kebangsaan No 7">
                </div>
                <div class="form-group">
                    <label for="inputNumber">Nomor Telepon</label>
                    <input type="number" name="no_mhs" class="form-control" id="no_mhs" placeholder="Contoh : 62xxxxx">
                </div>
                <div class="form-group">
                    <label for="inputEmail">E-Mail</label>
                    <input type="email" name="email_mhs" class="form-control" id="email_mhs" placeholder="Contoh : xxxxx@mail.com">
                </div>

                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
            </form><br>
            <?php

            // Check If form submitted, insert form data into users table.
            if (isset($_POST['Submit'])) {
                $nama_mhs = $_POST['nama_mhs'];
                $nim_mhs = $_POST['nim_mhs'];
                $no_mhs = $_POST['no_mhs'];
                $almt_mhs = $_POST['almt_mhs'];
                $email_mhs = $_POST['email_mhs'];

                $result = mysqli_query($mysqli, "INSERT INTO mahasiswa (nama_mhs, nim_mhs, no_mhs, almt_mhs, email_mhs) VALUES ('$nama_mhs', '$nim_mhs', '$no_mhs', '$almt_mhs', '$email_mhs')");
            }
            ?>
            <hr>
            <h2>Data Mahasiswa</h2>
            <table class="table" id="data">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. Telp</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY nim_mhs DESC");
                    while ($user_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['nama_mhs'] . "</td>";
                        echo "<td>" . $user_data['nim_mhs'] . "</td>";
                        echo "<td>" . $user_data['almt_mhs'] . "</td>";
                        echo "<td>" . $user_data['no_mhs'] . "</td>";
                        echo "<td>" . $user_data['email_mhs'] . "</td>";
                        echo "<td><a href='edit.php?id=$user_data[nim_mhs]'>Edit</a> | <a href='delete.php?id=$user_data[nim_mhs]'>Delete</a></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br><br>

        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <a class="text-dark" href="#">Student Database</a>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>
        <script>
        </Script>

    </body>

    </html>