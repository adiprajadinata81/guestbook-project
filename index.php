<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h2>Buku Tamu</h2>

<form action="process.php" method="POST">
    <input type="text" name="nama" placeholder="Nama"><br>
    <textarea name="pesan" placeholder="Pesan"></textarea><br>
    <button type="submit">Kirim</button>
</form>

<h3>Daftar Pesan:</h3>

<?php
$data = json_decode(file_get_contents("data.json"), true);

foreach ($data as $item) {
    echo "<div>";
    echo "<b>".$item['nama']."</b><br>";
    echo $item['pesan']."<hr>";
    echo "</div>";
}
?>


    
</body>
</html>