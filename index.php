<!DOCTYPE html>
<html>
<head>

   <title>Opioid Searcher</title>
   
   <!-- Including jQuery is required. -->

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="Styles/style.css">
   <link rel="shortcut icon" href="pillin.ico">

</head>

<body>
   <div class="container" style="max-width: 50%;"> 
      <div class="text-center mt-5 mb-4">
         <h2 align="center">Opioid Search</h2></br>
      </div>

      <input type="text" name="search" class="form-control" id="search_text" autocomplete = "off"
      placeholder="Search Drug Name..." />
   </div>

   <div id="searchresult"></div>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <?php include('search.php'); ?>
   <script type="text/javascript">
      $(document).ready(function(){
         $("#search_text").keyup(function(){
            var input = $(this).val();
            if (input != "")
            {
               $.ajax({
                     url: "search.php",
                     method: "POST",
                     data: {input:input},

                     success:function(data)
                     {
                     $("#searchresult").html(data); 
                     $("#searchresult").css("display", "block");
                     }
                   });
            }
            else{
               $("#searchresult").css("display", "none");
            }

         });
      });

   </script>
</body>
</html>