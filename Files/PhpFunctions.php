<?php
		$servername = "localhost";
    	$username = "root";
    	$password = "root";
    	$dbname = "kiaar";
		$hosting = "http://localhost/Projects/KiaarFinal/";

    	function name($name) // Page Heading Function
    	{
    		echo "<div class='center-align'>
  			<h3 style='color:grey'>".$name."</h3>
  			</div>";
    	}

    	function DynamicDropdown($query,$column,$id) // Dynamic DropDown function
    	{
    		global $servername, $username, $password, $dbname;
	    	$conn = new mysqli($servername,$username,$password,$dbname);

			$result = $conn->query($query);

			while($row = $result->fetch_assoc())
			{
				echo "<option value='".$row[$id]."'>".$row[$column]."</option>";
			}
			mysqli_close($conn);
    	}

        function host() // Echo Hosting name Function
        {
            Global $hosting;
            echo $hosting;
        }

        function EmployeeDropdown() // Employee Dropdown Function
    	{
    		global $servername, $username, $password, $dbname;
	    	$conn = new mysqli($servername,$username,$password,$dbname);

            $query = "SELECT * FROM employee_account WHERE Type = 's' ";
			$result = $conn->query($query);

			while($row = $result->fetch_assoc())
			{
                echo "<option value='".$row["Employee_id"]."'>".$row["Fname"]." ".$row["Lname"]."</option>";
			}
			mysqli_close($conn);
    	}

    ?>
