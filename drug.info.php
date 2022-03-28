<?php

if(isset($_GET['id']))
{
    require_once('db.php');

    $id = filter_input(INPUT_GET, 'id');

    $Query = "SELECT * FROM search WHERE genericname='$id'";

    $result = mysqli_query($con, $Query);

    $row = mysqli_fetch_assoc($result);


    if($row['genericname'] == "FENTANYL"){
        include("categories/FENTANYL.php");
    }
    else if($row['genericname'] == "MORPHINE"){
        include("categories/MORPHINE.php");
    
    }
 
}else{
    echo "Sorry, Opioid not found";
}



?>
