<!DOCTYPE html>
<html>
<head>
    <title>MyClient</title>
</head>

<body>
    <header>
        <h3>MyClient</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-client.php">List MyClient</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran client berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    <?php endif; ?>

    </body>
</html>