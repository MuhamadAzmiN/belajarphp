<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "ngl project");
// $result = mysqli_query($coon, "SELECT * FROM ngl");
// $cek = mysqli_fetch_assoc($result);
// var_dump($cek);
function tambah($data){
    global $conn;
    // htmlspecialchars untuk hacker kewalahan ckckcck
     // ambil data tiap element
    $nama = htmlspecialchars($data["nama"]);
    $kata = htmlspecialchars($data["inp"]);

    $query = "INSERT INTO ngl (nama, kata)
    VALUES
   ( '$nama', '$kata') 
";
// untuk mengecek berhasil atau tidak 
$result = mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}






?>