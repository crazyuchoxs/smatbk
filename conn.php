<?php
	// Variables for database connection
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "dbsmatbk";

	// Connect to database
	$conn = mysqli_connect($host, $user, $password, $database);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// SQL query to retrieve data from database
	$sql = "SELECT * FROM tblSiswa";

	// Execute the query and store the result
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo "<input class='form-control' list='datalistOptions' id='exampleDataList' placeholder='Type to search...'>";
		echo "<datalist id='datalistOptions'>";

		// Output the data from each row
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<option value='" . $row["NO"] . "'>" . $row["Nama"] . "</option>";
		}
		echo "</datalist>";
	} else {
		echo "No data found";
	}

	// Close database connection
	mysqli_close($conn);
?>