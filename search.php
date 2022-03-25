<?php 

include "db.php";
include "index.php";

if (isset($_POST['input'])){

    $input = $_POST['input'];

    $Query = "SELECT Name, genericname FROM search WHERE Name LIKE '%$input%' LIMIT 5";

    $result = mysqli_query($con, $Query);
    
    if(mysqli_num_rows($result) > 0){?>
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Generic Name</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($row = mysqli_fetch_assoc($result))
                {
                    $Name = $row['Name'];
                    $genericname = $row['genericname'];
                
                    ?>

                    <tr>
                        <td><?php echo $Name;?></td>
                        <td><?php echo $genericname;?></td>
                    </tr>
                    
                    <?php
                }
                    ?>    
            </tbody>
        </table>
        <?php
    }else{
        echo"<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
    }       
}
?>