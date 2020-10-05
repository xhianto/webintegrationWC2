<?php 
$title = "Opdracht 4 - Eenvoudige login systeem met sessies";
$error = "";
session_start();
if (isset($_POST["submit"])){
    if (isset($_POST["gebruikersnaam"])){
        $_SESSION["gebruikersnaam"] = $_POST["gebruikersnaam"];
    }
    if (isset($_POST["wachtwoord"])){
        $_SESSION["wachtwoord"] = $_POST["wachtwoord"];
    }
    $error = "Gebruikersnaam is \"Testgebruiker\" en wachtwoord is \"Testwachtwoord\".";
}
if (isset($_SESSION["gebruikersnaam"]) && isset($_SESSION["wachtwoord"])){
    if ($_SESSION["gebruikersnaam"] == "Testgebruiker" && $_SESSION["wachtwoord"] == "Testwachtwoord"){
        header("Location: geheim1.php");
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
    <link rel="stylesheet" href="css/site.css">
    <title><?php echo $title?></title>
</head>

<body>
    <div class="container">
        <h1 class="alert alert-info"><?php echo $title?></h1>
        <form action="login.php" method="post">
            <span class='error offset-sm-3'><?php echo $error?></span>
            <div class="form-group row">
                <label id="gebruikersnaam" class="col-sm-3 col-form-label">Gebruikersnaam: </label>
                <input type="text" class="form-control col-sm-6" name="gebruikersnaam" />
            </div>
            <div class="form-group row">
                <label id="wachtwoord" class="col-sm-3 col-form-label">Wachtwoord: </label>
                <input type="text" class="form-control col-sm-6" name="wachtwoord" />
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary offset-sm-3">Submit</button>
            <button type="submit" formaction="index.php" class="btn btn-primary">Terug naar index</button>
        </form>
    </div>
</body>

</html>