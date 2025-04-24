<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-client.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM my_client WHERE id=$id";
$query = mysqli_query($db, $sql);
$client = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Client</title>
</head>

<body>
    <header>
        <h3>Form Edit Client</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $client['id'] ?>" />

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="name" value="<?php echo $client['name'] ?>" />
        </p>
        <p>
            <label for="slug">Slug: </label>
            <input type="text" name="slug" placeholder="slug" value="<?php echo $client['slug'] ?>" />
        </p>
        <p>
            <label for="is_project">Project: </label>
            <input type="text" name="is_project" placeholder="is_project" value="<?php echo $client['is_project'] ?>" />
        </p>
        <p>
            <label for="self_capture">Self Capture: </label>
            <input type="text" name="self_capture" placeholder="self_capture" value="<?php echo $client['self_capture'] ?>" />
        </p>
        <p>
            <label for="client_prefix">Client Prefix: </label>
            <input type="text" name="client_prefix" placeholder="client_prefix" value="<?php echo $client['client_prefix'] ?>" />
        </p>
        <p>
            <label for="client_logo">Client Logo: </label>
            <input type="text" name="client_logo" placeholder="client_logo" value="<?php echo $client['client_logo'] ?>" />
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"><?php echo $client['address'] ?></textarea>
        </p>
        <p>
            <label for="phone_number">Phone: </label>
            <input type="text" name="phone_number" placeholder="phone_number" value="<?php echo $client['phone_number'] ?>" />
        </p>
        <p>
            <label for="city">City: </label>
            <input type="text" name="city" placeholder="city" value="<?php echo $client['city'] ?>" />
        </p>
        <p>
            <label for="updated_at">Updated At:</label>
            <input type="datetime-local" id="updated_at" name="updated_at">
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>