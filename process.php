<?php

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

if ($nama == "" || $pesan == "") {
    echo "Harap isi semua data!";
    exit;
}

$data = json_decode(file_get_contents("data.json"), true);

$data[] = [
    "nama" => $nama,
    "pesan" => $pesan
];

file_put_contents("data.json", json_encode($data));

header("Location: index.php");