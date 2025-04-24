<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $is_project = $_POST['is_project'];
    $self_capture = $_POST['self_capture'];
    $client_prefix = $_POST['client_prefix'];
    $client_logo = $_POST['client_logo'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $city = $_POST['city'];
    $created_at = $_POST['created_at'];

    // buat query
    $sql = "INSERT INTO my_client (name, slug, is_project, self_capture, client_prefix, client_logo, address, phone_number, city, created_at) VALUE ('$name', '$slug', '$is_project', '$self_capture', '$client_prefix', '$client_logo', '$address', '$phone_number', '$city', '$created_at')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>