<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Client</title>
</head>

<body>
    <header>
        <h3>List Client</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Project</th>
            <th>Self Capture</th>
            <th>Client Prefix</th>
            <th>Client Logo</th>
            <th>Address</th>
            <th>Phone</th>
            <th>City</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Deleted At</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM my_client";
        $query = mysqli_query($db, $sql);

        while($client = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$client['id']."</td>";
            echo "<td>".$client['name']."</td>";
            echo "<td>".$client['slug']."</td>";
            echo "<td>".$client['is_project']."</td>";
            echo "<td>".$client['self_capture']."</td>";
            echo "<td>".$client['client_prefix']."</td>";
            echo "<td>".$client['client_logo']."</td>";
            echo "<td>".$client['address']."</td>";
            echo "<td>".$client['phone_number']."</td>";
            echo "<td>".$client['city']."</td>";
            echo "<td>".$client['created_at']."</td>";
            echo "<td>".$client['updated_at']."</td>";
            echo "<td>".$client['deleted_at']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$client['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$client['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>