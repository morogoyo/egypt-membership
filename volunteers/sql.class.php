<?php


include('connection.php');


class Sql{
	
	function select()
	{
		global $conn;
		$volunteer_sql = "SELECT * FROM concert_volunteers";
		$result = $conn->query($volunteer_sql);

		if ($result->num_rows > 0 ){
				while ($row = $result->fetch_assoc() ) {
					
					echo $row['name']."</br>";
					
				}


		}else{
				echo "No volunteers as of right now";

		}

	}



	function insertSql(){
			global $conn;
			 
			$volunteer = strtoupper($_POST["name"]);
		$volunteer_sql = "INSERT INTO concert_volunteers (name) values('$volunteer')";
		 
		if ($conn->query($volunteer_sql) === TRUE) {
    //echo "New record created successfully";
 } //else {
// //     echo "Error: " . $volunteer_sql . "<br>" . $conn->error;
// // }
		

	}



}



?>