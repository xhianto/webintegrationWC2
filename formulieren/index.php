<?php
$title = "Werkcollege 2 - Formulieren";
$usernameError = $countryError = "";
$toonForm = false;
$selected = 1;
if(isset($_POST["oef2submit"])){
  if(empty($_POST["username"])){
    $usernameError = " Name is required";
  }elseif(strlen($_POST["username"]) < 8){
    $usernameError = " Minimum 8 characters";
  }else{
    $toonForm = true;
  }
  if(empty($_POST["country"])){
    $countryError = " Country is required";
    $toonForm = false;
  }
  $selected = 2;
}
if(isset($_POST["oef3submit"])){
  if(empty($_POST["username"]) || strlen($_POST["username"] < 8) || empty($_POST["country"])){
    header("Location: forbidden.php");
  }else{
    header("Location: profile.php");
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
    </link>
    <title><?php echo $title?></title>
</head>

<body>
    <div class="container">
        <h1 class="">Welcome to <?php echo $title?></h1>
        <label>Selecteer een oefening:</label>
        <select id=oefeningDropDown name="oefening">
            <?php
          $i = 1;
          while($i < 6){
            if ($i == $selected){
              echo "<option value=\"oef". $i ."\" selected>Oefening ". $i ."</option>";
            }else{
              echo "<option value=\"oef". $i ."\">Oefening ". $i ."</option>";
            }           
            $i++;
          }
        ?>
        </select>
        <div id="oef1" class="oefening">
            <h2 class="alert alert-info">Oefening 1 - Navigatie naar andere pagina</h2>
            <form action="process.php" method="post">
                <div class="form-group row">
                    <label id="username" class="col-sm-2 col-form-label">Username: </label>
                    <input type="text" class="form-control col-sm-6" name="username" />
                </div>
                <button type="submit" name="oef1submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div id="oef2" class="oefening">
            <h2 class="alert alert-info">Oefening 2 - Dezelfde pagina</h2>
            <form action="index.php" method="post">
                <div class="form-group row">
                    <label id="username" class="col-sm-2 col-form-label">Username: </label>
                    <input type="text" class="form-control col-sm-6" name="username" />
                    <span class="error"><?php echo $usernameError;?></span>
                </div>
                <div class="form-group row">
                    <label id="country" class="col-sm-2 col-form-label">Country: </label>
                    <input type="text" class="form-control col-sm-6" name="country" />
                    <span class="error"><?php echo $countryError?></span>
                </div>
                <button type="submit" name="oef2submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php 
            if ($toonForm){
              echo "<div class=\"alert alert-success\">Succes! Form is valid!</div>";
            }
            ?>
        </div>
        <div id="oef3" class="oefening">
            <h2 class="alert alert-info">Oefening 3 - Meerdere pagina's</h2>
            <form action="index.php" method="post">
                <div class="form-group row">
                    <label id="username" class="col-sm-2 col-form-label">Username: </label>
                    <input type="text" class="form-control col-sm-6" name="username" />
                    <span class="error"><?php echo $usernameError;?></span>
                </div>
                <div class="form-group row">
                    <label id="country" class="col-sm-2 col-form-label">Country: </label>
                    <input type="text" class="form-control col-sm-6" name="country" />
                    <span class="error"><?php echo $countryError?></span>
                </div>
                <button type="submit" name="oef3submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php 
            if ($toonForm){
              echo "<div class=\"alert alert-success\">Succes! Form is valid!</div>";
            }
            ?>
        </div>
        <div id="oef4" class="oefening">
            <h2 class="alert alert-info">Oefening 4 - Save image to file</h2>
            <form action="form.php">
                <button type="submit" value="submit" class="btn btn-primary">Naar form.php</button>
            </form>
        </div>
        <div id="oef5" class="oefening">
            <h2 class="alert alert-info">Oefening 5 - alle soorten velden</h2>
            <form action="oef5index.php">
                <button type="submit" value="submit" class="btn btn-primary">Naar Oefening 5.php</button>
            </form>
        </div>
    </div>
</body>

</html>