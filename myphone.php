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
        <input type="text"  placeholder="Name" name="name" value="">

        <br> <br> 
        <label>Phone</label>     
        <input type="text"  placeholder="Number" name="num" value="">
        <br> <br>
        <button type="submit" name="submit" >Submit</button>
    </form>
<h2>Search from the phonebook</h2>

<form action=""  method="Post" >
        <label>Search</label>     
        <input type="text"  placeholder="search" name="search_1">
        <br> <br>
        <button type="submit" name="search" >Search</button> 

    </form>
    <form action="viewResults.php" target="_blank" method="Post" >
    <h2>View All</h2>
        
        <button type="submit" name="submit1" value="View All">View All</button>

    </form>

    <?php 
	require_once "dbConnection.php";

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$number=$_POST['num'];
		
		$values="INSERT INTO contactsalert(pname,pphoned) VALUES('$name','$number') ";
		$query=mysqli_query($conn,$values);
		if(!$query){
			echo "Failed to insert";
		}
		else{
			echo "Inserted successfully!";
			
		}
		
	}

    echo "<br>"."Here is the result from your search: ";
        if(isset($_POST['search'])){
            $request=$_POST['search_1'];
            $qry="select * contactsalert where pname = '$request'";
            $run_qry=mysqli_query($conn,$qry);

            while($row=mysqli_fetch_array($run_qry)){
                $id=$row['pid'];
                echo "<br>";
                echo "<tr>";
                    echo "<td>".$row['pname']."<td>";
                    echo "<td>"."                   "."<td>"; 

                    echo "<td>".$row['pphoned']."<td>";
                    echo "<td>"."                   "."<td>";

             echo "</tr>";


        }    

    }

?>
    
</body>
</html>

