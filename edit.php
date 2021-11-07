<?php
$databaseHost = 'localhost';
$databaseName = 'biodata_mahasiswa';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $nama_mhs = $_POST['nama_mhs'];
    $nim_mhs = $_POST['nim_mhs'];
    $no_mhs = $_POST['no_mhs'];
    $almt_mhs = $_POST['almt_mhs'];
    $email_mhs = $_POST['email_mhs'];

    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nama_mhs='$nama_mhs', nim_mhs='$nim_mhs', no_mhs='$no_mhs', almt_mhs='$almt_mhs', email_mhs='$email_mhs' WHERE $nim_mhs=nim_mhs");


    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
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

<?php
$databaseHost = 'localhost';
$databaseName = 'biodata_mahasiswa';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Display selected user data based on id
// Getting id from url
$nim_mhs = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE nim_mhs=$nim_mhs");
while ($user_data = mysqli_fetch_array($result)) {
    $nama_mhs = $user_data["nama_mhs"];
    $nim_mhs = $user_data['nim_mhs'];
    $no_mhs = $user_data['no_mhs'];
    $almt_mhs = $user_data['almt_mhs'];
    $email_mhs = $user_data['email_mhs'];
}

?>
<html>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <i class="fab fa-stumbleupon-circle"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
        </div>
    </div>
</nav>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Biodata Mahasiswa</h1>
            <p class="lead">Update Biodata Mahasiswa.</p>
        </div>
    </div>
    <div class="container">
        <form method="post" name="form-update">
            <div class="form-row" id="input">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nama Lengkap</label>
                    <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" value=<?php echo "'$nama_mhs'"; ?>>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputNIM">NIM</label>
                    <input type="number" name="nim_mhs" class="form-control" id="nim_mhs" value=<?php echo "'$nim_mhs'"; ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" name="almt_mhs" class="form-control" id="almt_mhs" value=<?php echo "'$almt_mhs'"; ?>>
            </div>
            <div class="form-group">
                <label for="inputNumber">Nomor Telepon</label>
                <input type="number" name="no_mhs" class="form-control" id="no_mhs" value=<?php echo "'$no_mhs'"; ?>>
            </div>
            <div class="form-group">
                <label for="inputEmail">E-Mail</label>
                <input type="email" name="email_mhs" class="form-control" id="email_mhs" value=<?php echo "'$email_mhs'"; ?>>
            </div>

            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>