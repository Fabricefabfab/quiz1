<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Phonebook</title>
    <style>
        body{
            background-color:#f0f5f1 ;
        }
        input{
            border-radius: 05px;
            box-shadow: 1px 1px 2px 1px bleu;

        }

    </style>
</head>
<body>

    <form action="" method="Post">
        <label>Name</label>     
        <input type="text"  placeholder="Name" name="name1" value="">

        <br> <br> 
        <label>Phone</label>     
        <input type="text"  placeholder="Number" name="num1" value="">
        <br> <br>
        <button type="submit" name="update" value="submit">Update</button>
    </form>


    <?php 
	
    require "dbConnection.php";
    $id=$_GET['updid']; 
    $sql= "select * from contactsalert where pid= '$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    
    $pname=$row['pname'];
    $pphoned=$row['pphoned'];
    
    if(isset($_POST['update'])){ 
    
            $pname1=$_POST['name1'];
            $pphoned1=$_POST['num1'];
            
    $sql="update contactsalert set pid=$id,pname='$pname1', pphoned='$pphoned1' where pid=$id";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die(mysqli_error($conn)); 
                } 
    
        else{
          header("Location: viewResults.php" );
            
        }
    }
?>
    
</body>
</html>

