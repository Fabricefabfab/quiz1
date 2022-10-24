<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>delete</title>
</head>
<body>
    <?php

    require "dbConnection.php"; 
   


    if(isset($_GET['delid'])){

        $id=$_GET['delid']; 
        
        $delqry="delete from contactsalert where pid=$id";

        $result=mysqli_query($conn,$delqry); 
       

        if($result){
           echo'

         <script type="text/javascript">
         alert("Item will be deleted");
   </script>;';
        
       }

    
    
    else{
       die(mysqli_error($conn)); 
    }
    

    }

    ?>
     
</body>
</html>