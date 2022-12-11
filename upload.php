<?php

if (isset($_POST['submit']) && isset($_FILES['my_img'])){
    echo "<pre>";
    print_r($_FILES['my_img']);
    echo "</pre>";

    $img_name= $_FILES['my_image']['name'];
    $img_size= $_FILES['my_image']['size'];
    $tmp_name=$_FILES['my_imgae']['size'];
$sqlup="INSERT INTO ve(id,name,img_url,des) values('$)"
    if($error ===0){

    }
    else{

    }
}else{
    header("Location: vehicle.php");
}