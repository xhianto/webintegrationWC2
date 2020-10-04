<?php 
include "upload.php";
$titelError = $bestandnaamError = $bestandError = $resultaat = "";
if (isset($_POST["form"])){
    if (empty($_POST["titel"])){
        $titelError = " Moet ingevuld zijn";
    }
    if (empty($_POST["bestandnaam"])){
        $bestandnaamError = " Moet ingevuld zijn";
    }
    if ($_FILES["bestand"]["size"] == 0){
        $bestandError = " Geen bestand geselecteerd";
    }
    if (isset($_POST["titel"]) && isset($_POST["bestandnaam"]) && isset($_FILES["bestand"])){
        if(valideerFile($_FILES["bestand"])){
            $resultaat = "<div class=\"alert alert-success\"><p>Bestand uploaden is gelukt</p><img src=\"uploads/". $_FILES["bestand"]["name"] ."\" style=\"max-width:100%; height:auto;\" /><br /><a href=\"uploads/". $_FILES["bestand"]["name"] ."\">Link naar foto</a></div>";
        }else{
            $resultaat = "<div class=\"alert alert-danger\">Bestand uploaden is mislukt</div>";
        }
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/site.css">
    <title>Upload</title>
</head>

<body>
    <div class="container">
        <br />
        <form action="form.php" method="post" enctype="multipart/form-data">
            <span class="error offset-sm-2"><?php echo $titelError; ?></span>
            <div class="form-group row">
                <label id="titel" class="col-sm-2 col-form-label">Titel: </label>
                <div class="col-sm-6">
                    <div>
                    </div>
                    <input type="text" class="form-control" name="titel" />
                </div>
            </div>
            <span class="error offset-sm-2"><?php echo $bestandnaamError; ?></span>
            <div class="form-group row">
                <label id="bestandnaam" class="col-sm-2 col-form-label">Bestandnaam: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="bestandnaam" />
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2">
                    <div>
                        <span class="error"><?php echo $bestandError; ?></span>
                    </div>
                    <input type="file" name="bestand" />
                </div>
            </div>
            <button type="submit" name="form" value="submit" class="btn btn-primary offset-sm-2">Submit</button>
        </form>
        <br />
        <?php 
        echo $resultaat
        ?>
        <form action="index.php">
            <button type="submit" value="submit" class="btn btn-primary offset-sm-2">
                Terug naar Indexpagina
            </button>
        </form>
    </div>
</body>

</html>