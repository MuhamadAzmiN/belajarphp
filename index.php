<?php 
require 'funcation.php';



if(isset($_POST["submit"])){
    // ambil data tiap element

// untuk mengecek berhasil atau tidak 
if(tambah($_POST)> 0){
    echo "<script>alert('data berhasil di tambahkan');
    document.location.href = 'index1.php'</script>";
}else {
    echo "<script>alert('data gagal ditambahkan');
    document.location.href = 'index.php'</script>";
}



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<header>

<div class="form">
    <div class="input">
    <form action="" method="post">
        <ul>
            <li>
              
                <input type="text" name="nama" id="nama" required placeholder="Nama">
            </li>
            <li>
                
            <textarea type="text" name="inp" id="inp" required placeholder="Kata Kata Motivasi dong!"></textarea>
            </li>
        </div>
            <li>
            <button type="submit" name="submit" id="submit">Kirim ke Azmi</button>
            </li>
        </ul>
      
    </form>
</div>
    <footer>
        <div class="akhir">

        </div>
    </footer>
    <script src="project.js"></script>
</body>
</html>