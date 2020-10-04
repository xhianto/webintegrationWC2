<?php 
function valideerFullname($fullname){
    if (empty($fullname)){
        return "required";
    }
}
function valideerEmail($email){
    if (empty($email)){
        return "required";
    }
}
function valideerDoB($day, $month, $year){
    if (empty($day) || empty($month) || empty($year)){
        return "required";
    }elseif (checkdate($month, $day, $year)){
        if ($year < 1900){
            return "invalid date";
        }else{
            $dateNow = new DateTime(date("Y-m-d"));
            $dateInput = new DateTime($year ."-". $month ."-". $day);
            if ($dateInput > $dateNow){
                return "Date is in future";
            }
        }
    }else{
        return "Invalid date";
    }
}
function valideerStudentId($studentid){
    if (empty($studentid)){
        return "required";
    }else{
        $jaar = (int)($studentid / 100000);
        if ($jaar < 2014 || $jaar > 2019){
            return "Invalid student ID";
        }
    }
}
function valideerPicture($picture){
    if ($_FILES["picture"]["size"] != 0){
        if ($picture["size"] > 26214400 ){
            return "file is too big (max: 25mb)";
        }else if (strtolower($picture["type"]) == "image/jpg" || strtolower($picture["type"] == "image/png")){
            $upload_dir = "uploads/";
            if ($picture["error"] == "UPLOAD_ERR_OK"){
                $tmp_name = $picture["tmp_name"];
                $name = basename($picture["name"]);
                move_uploaded_file($tmp_name, "$upload_dir/$name");
            }
            return "";
        }
        return "Picture is not a jpg or png file";
    }
    else{
        return "Picture required";
    }
        
    
}
function valideerEducation($education){
    if ($education == "---Choose an education---"){
        return "required";
    }

}
function valideerFood($food){
    if ($food){
        return "required";
    }
}
?>