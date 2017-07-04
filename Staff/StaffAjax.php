<?php

    include '../Files/PhpFunctions.php';

    $action = $_POST["action"];

    switch($action)
    {
        case 'RetrieveEmployeeDetails': RetrieveEmployeeDetails(); break;
        case 'UpdateEmployeeDetails': UpdateEmployeeDetails(); break;
    }

    /*-------------------------------Edit Employee Account And Admin Account------------------------*/
    function RetrieveEmployeeDetails()
    {
        //Converting all the $_POST into $return format
        $return = $_POST;

        //Opening the Database Connection
        Global $servername, $username, $password, $dbname;

        $conn = new mysqli($servername, $username, $password, $dbname);

        //Fetching data from json data object
        if(!(isset($_SESSION)))
        {
            session_start();
        }
        $SessionEmployee_id = $_SESSION["Employee_id"];

        $sql = "SELECT * FROM employee_account WHERE Employee_id = '$SessionEmployee_id'";

        $result = $conn->query($sql);
        $conn->close();
        //Retreving data from query and copying them json object
        while($row = $result->fetch_assoc())
        {
            $return["Fname"] = $row["Fname"];
            $return["Mname"] = $row["Mname"];
            $return["Lname"] = $row["Lname"];
            $return["Date_of_birth"] = $row["Date_of_birth"];
            $return["Date_of_joining"] = $row["Date_of_joining"];
            $return["Gender"] = $row["Gender"];
            $return["Address"] = $row["Address"];
            $return["Contact_no"] = $row["Contact_no"];
            $return["Email"] = $row["Email"];
        }


        //Encoding json and sending json data back to th page
        $return["json"] = json_encode($return);
        echo json_encode($return);
    }

    function UpdateEmployeeDetails()
    {
        $return = $_POST;

        //Opening the Database Connection
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Fetching data from json data object
        $Fname = $return["Fname"];
        $Mname = $return["Mname"];
        $Lname = $return["Lname"];
        $Date_of_birth = $return["Date_of_birth"];
        $Date_of_joining = $return["Date_of_joining"];
        $Gender = $return["Gender"];
        $Address = $return["Address"];
        $Contact_no = $return["Contact_no"];
        $Email = $return["Email"];
        

        if(!(isset($_SESSION)))
        {
            session_start();
        }
        $SessionEmployee_id = $_SESSION["Employee_id"];


            $sql = "UPDATE employee_account SET Fname = '$Fname', Mname = '$Mname', Lname = '$Lname', Date_of_birth = '$Date_of_birth', Date_of_joining = '$Date_of_joining', Gender = '$Gender', Address = '$Address', Contact_no = $Contact_no, Email = '$Email' WHERE Employee_id = $SessionEmployee_id  ";

        $conn->query($sql);
        $conn->close();
        $return["json"] = json_encode($return);
        echo json_encode($return);
    }






?>
