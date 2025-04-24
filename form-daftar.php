<!DOCTYPE html>
<html>
<head>
    <title>Form Client</title>
</head>

<body>
    <header>
        <h3>Form Client</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="name" />
        </p>
        <p>
            <label for="slug">Slug: </label>
            <input type="text" name="slug" placeholder="slug" />
        </p>
        <p>
            <label for="is_project">Project: </label>
            <input type="text" name="is_project" placeholder="is_project" />
        </p>
        <p>
            <label for="self_capture">Self Capture: </label>
            <input type="text" name="self_capture" placeholder="self_capture" />
        </p>
        <p>
            <label for="client_prefix">Client Prefix: </label>
            <input type="text" name="client_prefix" placeholder="client_prefix" />
        </p>
        <p>
            <label for="client_logo">Client Logo: </label>
            <input type="text" name="client_logo" placeholder="client_logo" />
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"></textarea>
        </p>
        <p>
            <label for="phone_number">Phone: </label>
            <input type="text" name="phone_number" placeholder="phone_number" />
        </p>
        <p>
            <label for="city">City: </label>
            <input type="text" name="city" placeholder="city" />
        </p>
        <p>
            <label for="created_at">Created At:</label>
            <input type="datetime-local" id="created_at" name="created_at">
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>