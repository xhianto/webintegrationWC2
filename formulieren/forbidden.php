<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Forbidden</title>
</head>

<body>
    <?php 
    echo $_POST["username"];
    ?>
    <div class="container">
        <div class="alert alert-danger">
            Validatie is niet gelukt!
        </div>
        <form action="index.php">
            <button type="submit" value="submit" class="btn btn-primary">
                Terug naar Indexpagina
            </button>
        </form>
    </div>
</body>

</html>