
<?php 


// koneksi
$conn = mysqli_connect("localhost", "root", "", "ngl project");
$result = mysqli_query($conn, "SELECT * FROM ngl");
// if(!$conn){
//     echo mysqli_error($result);
// }


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    table {
      width: 80%;
      margin-top: 20px;
      border-collapse: collapse;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border-radius: 8px;
      background-color: #fff;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e1e1e1;
    }
</style>
<body>
<table>
    <thead>
      <tr>
        <th>Nama</th>
        <th>MOTIVASI</th>
      </tr>
    </thead>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $row["nama"];?><br></td>
        <td><?= $row["kata"];?></td>
       
      </tr>
    <?php endwhile;?>
</table>
</body>
</html>