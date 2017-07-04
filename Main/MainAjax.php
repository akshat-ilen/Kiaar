<?php

    include('../Files/PhpFunctions.php');





            $return = $_POST;

            //Opening the Database Connection
            Global $servername, $username, $password, $dbname;
            $conn = new mysqli($servername, $username, $password, $dbname);

            $Employee_id = $return["Employee_id"];
            $password = $return["Password"];

            $sql = "SELECT * From employee_account WHERE Employee_id = $Employee_id";

            if($conn->query($sql))
            {
                $return["message"] = "Error";
                $return["json"] = json_encode($return);
                echo json_encode($return);
            }
            else
            {
                $result = $conn->query($sql);
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
                    $return["type"] = $row["Type"];
                    $return["message"] = "Success";
                }
                $return["json"] = json_encode($return);
                echo json_encode($return);
            }
            }












?>
