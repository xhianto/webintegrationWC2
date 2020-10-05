<?php
include "tijdzone.php";
$taal = "";
$tijdZones = generate_timezone_list();

session_start();
if (isset($_POST["submit"])){
    if (isset($_POST["taal"])){
        $_SESSION["taal"] = $_POST["taal"];
    }
    else{
        unset($_SESSION["taal"]);
    }
    if (isset($_POST["naam"])){
        $_SESSION["naam"] = $_POST["naam"];
    }
    else{
        unset($_SESSION["naam"]);
    }
    if (isset($_POST["kleur"])){
        $_SESSION["kleur"] = $_POST["kleur"];
        setcookie("kleur", "");
    }
    else{
        unset($_SESSION["kleur"]);
    }
    header("Location: index.php");
    if (isset($_POST["tijdzone"])){
        if ($_POST["tijdzone"] == "---Kies een Tijdzone---"){
            unset($_SESSION["tijdzone"]);
        }else{
            $_SESSION["tijdzone"] = $_POST["tijdzone"];
        }
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
    <title>Taal instellen</title>
</head>

<body>
    <div class="container">
        <h2 class="alert alert-info">Oefening 1 en 2: Instellingen</h2>
        <form action="instellingenMetSessions.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Taal: </label>
                <div class="">
                    <div class="form-check formalign">
                        <input id="nederlands" type="radio" name="taal" value="NL" />
                        <label for="nederlands">Nederlands</label>
                    </div>
                    <div class="form-check formalign">
                        <input id="engels" type="radio" name="taal" value="EN" />
                        <label for="engels">English</label>
                    </div>
                    <div class="form-check formalign">
                        <input id="frans" type="radio" name="taal" value="FR" />
                        <label for="frans">Française</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Naam: </label>
                <input type="text" name="naam" class="col-sm-6" />
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-lable">Achtergrond Kleur: </label>
                <select name="kleur" size="6">
                    <option value="red">Rood</option>
                    <option value="green">Groen</option>
                    <option value="blue">Blauw</option>
                    <option value="yellow">Geel</option>
                    <option value="orange">Oranje</option>
                    <option value="purple">Paars</option>
                </select>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-lable">Tijdzone: </label>
                <select name="tijdzone">
                    <option>---Kies een Tijdzone---</option>
                    <?php 
                    foreach ($tijdZones as $key => $tijdZone){
                        echo "<option value='". $key ."'>". $tijdZone ."</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" value="submit" class="btn btn-primary" name="submit">Bevestigen</button>
        </form>
    </div>
</body>

</html>