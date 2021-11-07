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

    $result = mysqli_query($mysqli, "INSERT INTO mahasiswa (nama_mhs, nim_mhs, no_mhs, almt_mhs, email_mhs) VALUES ('$nama_mhs', '$nim_mhs', '$no_mhs', '$almt_mhs', '$email_mhs')");


    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>

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
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$nim_mhs");

while ($user_data = mysqli_fetch_array($result)) {
    $nama_mhs = $_POST['nama_mhs'];
    $nim_mhs = $_POST['nim_mhs'];
    $no_mhs = $_POST['no_mhs'];
    $almt_mhs = $_POST['almt_mhs'];
    $email_mhs = $_POST['email_mhs'];
}

?>
<html>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form method="post" name="form-update">
        <div class="form-row" id="input">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nama Lengkap</label>
                <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" value=<?php echo $nama_mhs; ?>>
            </div>
            <div class="form-group col-md-6">
                <label for="inputNIM">NIM</label>
                <input type="number" name="nim_mhs" class="form-control" id="nim_mhs" value=<?php echo $nim_mhs; ?>>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAlamat">Alamat</label>
            <input type="text" name="almt_mhs" class="form-control" id="almt_mhs" value=<?php echo $almt_mhs; ?>>
        </div>
        <div class="form-group">
            <label for="inputNumber">Nomor Telepon</label>
            <input type="number" name="no_mhs" class="form-control" id="no_mhs" value=<?php echo $no_mhs; ?>>
        </div>
        <div class="form-group">
            <label for="inputEmail">E-Mail</label>
            <input type="email" name="email_mhs" class="form-control" id="email_mhs" value=<?php echo $email_mhs; ?>>
        </div>

        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</body>

</html>