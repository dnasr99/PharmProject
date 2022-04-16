<?php

if(isset($_GET['id']))
{
    require_once('db.php');

    $id = filter_input(INPUT_GET, 'id');

    $Query = "SELECT * FROM search WHERE genericname='$id'";

    $result = mysqli_query($con, $Query);

    $row = mysqli_fetch_assoc($result);


    if($row['genericname'] == "FENTANYL" OR $row['genericname'] == "FENTANYL CITRATE"){
        include("categories/FENTANYL.php");
    }
    else if($row['genericname'] == "MORPHINE" OR $row['genericname'] == "MORPHINE SULFATE"){
        include("categories/MORPHINE.php");
    
    }
    else if($row['genericname'] == "HYDROCODONE" OR $row['genericname'] == "HYDROCODONE BITARTRATE" OR $row['genericname'] == "HYDROCODONE/IBUPROFEN" OR $row['genericname'] == "HYDROCODONE/ACETAMINOPHEN"){
        include("categories/HYDROCODONE.php");
    
    }
 
}else{
    echo "Sorry, Opioid not found";
}


?>
