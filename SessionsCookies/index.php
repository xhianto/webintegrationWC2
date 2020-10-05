<?php
$title = "Werkcollege 2 - Cookies & Sessions";
$welkomstBerichtCookies = "Welkom op deze cookie testing pagina, ";
$welkomstBerichtSessions = "Welkom op deze sessions testing pagina, ";
$naamCookies = $naamSessions = "bezoeker";
$kleur= "white";
$tijdCookies = $tijdSessions = getdate();
if (isset($_COOKIE["taal"])){
    switch ($_COOKIE["taal"]){
        case "EN":
            $welkomstBerichtCookies = "Welcome to this cookie testing site, ";
        break;
        case "FR":
            $welkomstBerichtCookies = "Bienvenue sur ce site de test de cookies, ";
        break;
    }
}
if (isset($_COOKIE["naam"])){
    $naamCookies = $_COOKIE['naam'];
}
if (isset($_COOKIE["kleur"])){
    $kleur= $_COOKIE["kleur"];
}
if (isset($_COOKIE["tijdzone"])){
    date_default_timezone_set($_COOKIE["tijdzone"]);
    $tijdCookies = getdate();
}

session_start();
if (isset($_SESSION["taal"])){
    switch ($_SESSION["taal"]){
        case "EN":
            $welkomstBerichtSessions = "Welcome to this sessions testing site, ";
        break;
        case "FR":
            $welkomstBerichtSessions = "Bienvenue sur ce site de test de session, ";
        break;
    }
}
if (isset($_SESSION["naam"])){
    $naamSessions = $_SESSION['naam'];
}
if (isset($_SESSION["kleur"])){
    $kleur= $_SESSION["kleur"];
}
if (isset($_SESSION["tijdzone"])){
    date_default_timezone_set($_SESSION["tijdzone"]);
    $tijdSessions = getdate();
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

<?php echo "<body style='background-color:". $kleur."'>" ?>
<div class="container">
    <h1 class="alert alert-info"><?php echo $title?></h1>
    <label>Selecteer een oefening:</label>
    <select id=oefeningDropDown name="oefening">
        <option value="oef12">Oefening 1 + 2</option>
        <option value="oef3">Oefening 3</option>
        <option value="oef4">Oefening 4</option>
    </select>
    <div id="oef12" class="oefening">
        <h2 class="alert alert-info">Oefening 1 + 2 - Cookies</h2>
        <div class="alert alert-warning">
            <?php echo date("l, j F Y h:i:s", mktime($tijdCookies["hours"], $tijdCookies["minutes"], $tijdCookies["seconds"], $tijdCookies["mon"], $tijdCookies["mday"], $tijdCookies["year"])); ?>
        </div>
        <div class="alert alert-success"><?php echo $welkomstBerichtCookies . $naamCookies;?></div>
        <form action="instellingenMetCookies.php">
            <button type="submit" value="submit" class="btn btn-primary">Taal instellen</button>
        </form>
    </div>
    <div id="oef3" class="oefening">
        <h2 class="alert alert-info">Oefening 3 - Sessions</h2>
        <div class="alert alert-warning">
            <?php echo date("l, j F Y h:i:s", mktime($tijdSessions["hours"], $tijdSessions["minutes"], $tijdSessions["seconds"], $tijdSessions["mon"], $tijdSessions["mday"], $tijdSessions["year"])); ?>
        </div>
        <div class="alert alert-success"><?php echo $welkomstBerichtSessions . $naamSessions;?></div>
        <form action="instellingenMetSessions.php">
            <button type="submit" value="submit" class="btn btn-primary">Taal instellen</button>
        </form>
    </div>
    <div id="oef4" class="oefening">
        <h2 class="alert alert-info">Oefening 4 - Een eenvoudig login systeem met sessies</h2>
        <form action="login.php">
            <button type="submit" value="submit" class="btn btn-primary">Naar login pagina</button>
        </form>
    </div>
</div>
</body>

</html>