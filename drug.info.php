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
    else if($row['genericname'] == "OXYCODONE HCL" OR $row['genericname'] == "OXYCODONE HCL/ACETAMINOPHEN"){
        include("categories/OXYCODONE.php");
    
    }
    else if($row['genericname'] == "BUTORPHANOL TARTRATE"){
        include("categories/BUTORPHANOL.php");
    
    }
    else if($row['genericname'] == "OXYMORPHONE HCL"){
        include("categories/OXYMORPHONE.php");
    
    }
    else if($row['genericname'] == "TRAMADOL HCL" OR $row['genericname'] == "TRAMADOL HCL/ACETAMINOPHEN"){
        include("categories/TRAMADOL.php");
    
    }
    else if($row['genericname'] == "MEPERIDINE HCL"){
        include("categories/MEPERIDINE.php");
    
    }
    else if($row['genericname'] == "HYDROMORPHONE HCL"){
        include("categories/HYDROMORPHONE.php");
    
    }
 
}else{
    echo "Sorry, Opioid not found";
}


?>
