<?php
    $error ="";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $userid = $_POST["Employee_id"];
        $password = $_POST["Password"];


        $password = md5(md5(md5($password)));


        $sql = "SELECT * FROM employee_account WHERE Employee_id = $userid ";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result)<1)
        {
            $error = "Invalid Username or Password";
        }
        else
        {
            $error = "";
            while($row = $result->fetch_assoc())
            {
                $dbPassword = $row["Password"];
                $dbType = $row["Type"];
                $Employee_id = $row["Employee_id"];
                $Fname = $row["Fname"];
                $Mname = $row["Mname"];
                $Lname = $row["Lname"];
                $Gender = $row["Gender"];
                $Email = $row["Email"];
            }
            mysqli_close($conn);

            if($dbPassword==$password)
            {
                if($dbType=="a")
                {
                    session_start();
                    $_SESSION["Employee_id"] = $Employee_id;
                    $_SESSION["Fname"] = $Fname;
                    $_SESSION["Mname"] = $Mname;
                    $_SESSION["Lname"] = $Lname;
                    $_SESSION["Gender"] = $Gender;
                    $_SESSION["Email"] = $Email;

                    header('Location: '.$hosting.'Admin/AdminMaster.php');
                    exit();
                }
                else if($dbType=="s")
                {
                    session_start();
                    $_SESSION["Employee_id"] = $Employee_id;
                    $_SESSION["Fname"] = $Fname;
                    $_SESSION["Mname"] = $Mname;
                    $_SESSION["Lname"] = $Lname;
                    $_SESSION["Gender"] = $Gender;
                    $_SESSION["Email"] = $Email;
                    header('Location: '.$hosting.'Staff/StaffMaster.php');
                    exit();
                }
            }
            else
            {
                $error = "Invalid Username or Password";
            }
        }




    }

?>
