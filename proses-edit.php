<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $is_project = $_POST['is_project'];
    $self_capture = $_POST['self_capture'];
    $client_prefix = $_POST['client_prefix'];
    $client_logo = $_POST['client_logo'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $city = $_POST['city'];
    $updated_at = $_POST['updated_at'];

    // buat query update
    $sql = "UPDATE my_client SET name='$name', slug='$slug', is_project='$is_project', self_capture='$self_capture', client_prefix='$client_prefix', client_logo='$client_logo', address='$address', phone_number='$phone_number', city='$city', updated_at='$updated_at'  WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman
        header('Location: list-client.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>