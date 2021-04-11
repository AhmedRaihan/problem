<?php 

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];

	if(isset($searchKey) && $searchKey != ""){

    $conn = new mysqli("localhost", "wta_user_1", "123", "wta");

    if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);

		if($result -> num_rows > 0) {

			echo "<ol>";

			while($row = $result -> fetch_assoc()) {

				echo "<li>";
				echo $row["id"] . " " . $row["username"];
				echo "</li>";
			}

			echo "</ol>";
		} 

	else {
			echo "Please enter any ID!";
		} 

}

	
		


	$conn -> close();
}
}

?> 