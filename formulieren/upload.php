<?php 
function valideerFile($file){
    if ($file["type"] == "image/jpeg" || $file["type"] == "image/png"){
        $upload_dir = "uploads/";
        if ($file["error"] == "UPLOAD_ERR_OK"){
            $tmp_name = $file["tmp_name"];
            $name = basename($file["name"]);
            move_uploaded_file($tmp_name, "$upload_dir/$name");
        }
        return true;
    }
    return false;
}
?>