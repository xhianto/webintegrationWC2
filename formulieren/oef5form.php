<?php 
function htmltitel(){
    echo "Food, Drinks and boardgames!";
}
function htmlparagraaf(){
    echo "<h1 class='alert alert-info'>Sign up of our monthly sessions of after-work activities.</h1>";
}
function htmlform($arrayEducation, $arrayInterests, $fullnameError, $emailError, $dateofbirthError, $studentidError, $pictureError, $educationError, $foodError){
    echo "<form action='oef5index.php' method='post' enctype='multipart/form-data'>";
    //hidden field
    echo "<input type='hidden' name='hiddenValue' value='255'>";
    //text fullname
    echo "<span class='error offset-sm-2'>$fullnameError</span>";
    echo "<div class='form-group row'>";
    echo "<label id='fullname' class='col-sm-2 col-form-label'>Fullname: </label>";
    echo "<input type='text' class='form-control col-sm-6' name='fullname' />";
    echo "</div>";
    //text email
    echo "<span class='error offset-sm-2'>$emailError</span>";
    echo "<div class='form-group row'>";
    echo "<label id='email' class='col-sm-2 col-form-label'>Email: </label>";
    echo "<input type='text' class='form-control col-sm-6' name='email' />";
    echo "</div>";
    //3xnumber date of birth (day/month/year)
    echo "<span class='error offset-sm-2'>$dateofbirthError</span>";
    echo "<div class='form-group row'>";
    echo "<label id='dateofbirth' class='col-sm-2 col-form-label'>Date of birth:: </label>";
    echo "<div class='form-inline col-sm-6 formalign'>";
    echo "<input type='number' class='form-control' name='day' style='width:60px;' />(day)/";
    echo "<input type='number' class='form-control' name='month' style='width:60px;' />(month)/";
    echo "<input type='number' class='form-control' name='year' style='width:80px;' />(year)";
    echo "</div>";
    echo "</div>";
    //text city
    echo "<br />";
    echo "<div class='form-group row'>";
    echo "<label id='city' class='col-sm-2 col-form-label'>City: </label>";
    echo "<input type='text' class='form-control col-sm-6' name='city' />";
    echo "</div>";
    //number StudentId
    echo "<span class='error offset-sm-2'>$studentidError</span>";
    echo "<div class='form-group row'>";
    echo "<label id='studentid' class='col-sm-2 col-form-label'>StudentId: </label>";
    echo "<input type='number' class='form-control col-sm-6' name='studentid' />";
    echo "</div>";
    //file picture of student
    echo "<span class='error offset-sm-2'>$pictureError</span>";
    echo "<div class='form-group row'>";
    echo "<label class='col-sm-2 col-form-label'>Picture: </label>";
    echo "<input type='file' class='col-sm-6 formalign' name=\"picture\" />";
    echo "</div>";
    //dropdown education
    echo "<span class='error offset-sm-2'>$educationError</span>";
    echo "<div class='form-group row'>";
    echo "<label id='education' class='col-sm-2 col-form-label'>Education: </label>";
    echo "<Select type='number' class='form-control col-sm-6' name='education'>";
    foreach ($arrayEducation as $key => $value){
        echo "<option>". $value ."</option>";
    }
    echo "</select>";
    echo "</div>";
    //checkboxes interests
    echo "<br />";
    echo "<div class='form-group row'>";
    echo "<label id='interests' class='col-sm-2 col-form-label'>Interests: </label>";
    echo "<div>";
    foreach ($arrayInterests as $key => $value){
        echo "<div class='form-check'>";
        echo "<input type='checkbox' class='form-check-input' id='interests". $key ."'><label class='form-check-label' for='interests". $key ."'>". $value ."</label>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";
    //radiobuttons food
    echo "<span class='error offset-sm-2'>$foodError</span>";
    echo "<div class='form-group row'>";
    echo "<label id='food' class='col-sm-2 col-form-label'>Food: </label>";
    echo "<div class='col-sm-6 formalign'>";
    echo "<div class='form-check formalign'>";
    echo "<input id='order' type='radio' name='food' value='order' />";
    echo "<label for='order'>I would like there to be the option to order food for the evening.</label>";
    echo "</div>";
    echo "<div class='form-check formalign'>";
    echo "<input id='bringOwn' type='radio' name='food' value='bringOwn' />";
    echo "<label for='bringOwn'>I will bring my own/Do not need food.</label>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    //button submit
    echo  "<button type='submit' name='form' value='submit' class='btn btn-primary offset-sm-2'>Submit</button>";
    echo "</form>";
    }
    ?>