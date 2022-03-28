<head>

   <title>Opioid Searcher</title>
   

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="Styles/style.css">
   <link rel="shortcut icon" href="pillin.ico">

</head>

<?php 

include("db.php");

if (isset($_POST['input'])){

    $input = $_POST['input'];

    $Query = "SELECT Name, genericname, description FROM search WHERE Name LIKE '%$input%' LIMIT 5";

    $result = mysqli_query($con, $Query);
    
    if(mysqli_num_rows($result) > 0){?>
        <div id="tableDiv">
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Main Active Ingredient</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $Name = $row['Name'];
                        $genericname = $row['genericname'];
                        $description = $row['description'];
                        ?>
                        <tr>
                            <td><?php echo $Name;?></td>
                            <?php echo"<td><a href='drug.info.php?id={$genericname}'>$genericname</a></td>"?>
                            <td><?php echo $description;?></td>
                        </tr>
                        
                        <?php
                    }
                        ?>    
                </tbody>
            </table>
        </div>
    <?php 
    }else{
        echo"<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
    }       
}
?>
