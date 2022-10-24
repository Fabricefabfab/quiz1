<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>results</title>

	<style>

table

{

border-style:solid;

border-width:2px;

border-color:#013d6e;

margin-left: auto; 
margin-right: auto;
}

</style>
</head>
<body>


	<?php 

            require_once "dbConnection.php";

            $query="select * from contactsalert";
            $run_query=mysqli_query($conn,$query);
            echo "<br>"."<br>"."<br>"."<br>"."<br>";
            echo "<table border='1'>

					<tr>
					<th>name</th>
					<th>contact</th>
					</tr>";

            if($run_query){
            	while($row=mysqli_fetch_array($run_query)){
					
            		echo "<tr>";
  						echo "<td>" . $row['namee'] . "</td>";
  						echo "<td>" . $row['yourcontact'] . "</td>";
                    echo "<br>";
  						echo "</tr>";

            	}

            	echo "</table>";

            }


	?>				

</body>
</html>









