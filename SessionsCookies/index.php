<?php
$title = "Werkcollege 2 - Cookies & Sessions";
$wellkomstBericht = "Welkom op deze cookie testing pagina, ";
$naam = "bezoeker";
$kleur = "white";
$tijd = getdate();
if (isset($_COOKIE["taal"])){
    switch ($_COOKIE["taal"]){
        case "EN":
            $wellkomstBericht = "Welcome to this cookie testing site, ";
        break;
        case "FR":
            $wellkomstBericht = "Bienvenue sur ce site de test de cookies, ";
        break;
    }
}
if (isset($_COOKIE["naam"])){
    $naam = $_COOKIE['naam'];
}
if (isset($_COOKIE["kleur"])){
    $kleur = $_COOKIE["kleur"];
}
if (isset($_COOKIE["tijdzone"])){
    date_default_timezone_set($_COOKIE["tijdzone"]);
    $tijd = getdate();
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
    <title><?php echo $title?></title>
</head>

<?php echo "<body style='background-color:". $kleur ."'>" ?>
<div class="container">
    <h1 class=""><?php echo $title?></h1>
    <label>Selecteer een oefening:</label>
    <select id=oefeningDropDown name="oefening">
        <option value="oef12">Oefening 1 + 2</option>
        <option value="oef3">Oefening 3</option>
        <option value="oef4">Oefening 4</option>
    </select>
    <div id="oef12" class="oefening">
        <h2 class="alert alert-info">Oefening 1 - Eenvoudige Cookies</h2>
        <div class="alert alert-warning">
            <?php echo date("l, j F Y h:i:s", mktime($tijd["hours"], $tijd["minutes"], $tijd["seconds"], $tijd["mon"], $tijd["mday"], $tijd["year"])); ?>
        </div>
        <div class="alert alert-success"><?php echo $wellkomstBericht . $naam;?></div>
        <form action="instellingen.php">
            <button type="submit" value="submit" class="btn btn-primary">Taal instellen</button>
        </form>
    </div>
    <div id="oef2" class="oefening">
        <h2 class="alert alert-info">Oefening 2 - Uigebreide Cookies</h2>
    </div>
    <div id="oef3" class="oefening">
        <h2 class="alert alert-info">Oefening 3 - Sessions</h2>
    </div>
    <div id="oef4" class="oefening">
        <h2 class="alert alert-info">Oefening 4 - Een eenvoudig login systeem met sessies</h2>
    </div>
</div>
</body>

</html>