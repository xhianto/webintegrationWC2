<?php 
include "oef5form.php";
include "oef5validation.php";
$fullnameError = $emailError = $dateofbirthError = $studentidError = $pictureError = $educationError = $foodError = "";
$arrayEducation = array("---Choose an education---", "Toegepaste Informatica", "Multimedia en Communicatietechnologie", "Graduaat Programmeren", "Graduaat Internet of Things", "Graduaat Netwerken", "Postgraduaat A.I.", "Postgraduaat Coding");
$arrayInterests = array("Boardgames", "DnD", "Poker", "Hackaton");
if (isset($_POST["form"])){
    $fullnameError = valideerFullname($_POST["fullname"]);
    $emailError = valideerEmail($_POST["email"]);
    $dateofbirthError =  valideerDoB($_POST["day"], $_POST["month"], $_POST["year"]);
    $studentidError = valideerStudentId($_POST["studentid"]);
    $pictureError = valideerPicture($_FILES["picture"]);
    $educationError = valideerEducation($_POST["education"]);
    $foodError = valideerFood(empty($_POST["food"]));
    if ($fullnameError == "" && $emailError == "" && $dateofbirthError == "" && $studentidError == "" && $pictureError == "" && $educationError == "" && $foodError == "" && $_POST["hiddenValue"] == 255){
        header("Location: oef5signup.php");
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
    <title><?php htmltitel(); ?></title>
</head>

<body>
    <div class="container">
        <?php 
        htmlparagraaf();
        htmlform($arrayEducation, $arrayInterests, $fullnameError, $emailError, $dateofbirthError, $studentidError, $pictureError, $educationError, $foodError);
        ?>
        <br />
        <div class="offset-sm-2">
            <form action="index.php">
                <button type="submit" value="submit" class="btn btn-primary">
                    Terug naar Indexpagina
                </button>
            </form>
        </div>
    </div>
</body>

</html>