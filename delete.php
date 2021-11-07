<?php
// include database connection file
$databaseHost = 'localhost';
$databaseName = 'biodata_mahasiswa';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Get id from URL to delete that user
$nim_mhs = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE nim_mhs=$nim_mhs");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
