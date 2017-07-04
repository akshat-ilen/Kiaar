<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit Account</title>
        <?php include '../Files/PhpFunctions.php'; ?>
        <?php include '../Files/Links.php'; ?>
        <?php include 'AdminFiles/AdminLinks.php'; ?>
    </head>
    <body>
        <?php include("AdminFiles/AdminHeader.php"); ?><!-- Admin Header File -->
        <?php name("Change Password")?>

        <!-- Change Password Logic -->
        <?php

            $currentPasswordError = "";
            $confirmPasswordError = "";
            $confirmNewPasswordError = "";

            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                global $servername, $username, $password, $dbname;
                $conn = new mysqli($servername,$username,$password,$dbname);

                $sql = "SELECT * FROM employee_account WHERE Type = 'a'";

                $result = $conn->query($sql);

                while($row = $result->fetch_assoc())
                {
                    $oldPassword = $row['Password'];
                }

                if(md5(md5(md5($_POST['CurrentPassword']))) != $oldPassword)
                {
                    $currentPasswordError = "Please Enter Correct Current Password";
                }
                else
                {
                    $currentPasswordError = "";
                    if($_POST['NewPassword'] == $_POST['ConfirmNewPassword'])
                    {
                        Global $servername,$username,$password,$dbname;
                        $conn = new mysqli($servername,$username,$password,$dbname);

                        $newPassword = md5(md5(md5($_POST['NewPassword'])));

                        $sql = "UPDATE employee_account SET Password = '$newPassword' WHERE Type = 'a' ";

                        if ($conn->query($sql) == TRUE)
                        {
                            echo '<script>$("document").ready(function(){
                                alert("Password Changed Successfully");
                                })</script>';
                        }
                        else
                        {
                            echo '<script>$("document").ready(function(){
                                alert("Password was not updated Successfully");
                                })</script>';
                        }

                        $conn->close();
                    }
                    else
                    {
                        $confirmNewPasswordError = "Please enter same as above";
                    }
                }

            }


        ?>

        <div class="EditAccountForm row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form id="EmployeeForm" method ="post" class="col s12 m12 l12">

                        <div class="row" style="margin-top:20px">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3" >
                                <input id="CurrentPassword" type="password" class="validate" name="CurrentPassword" required>
                                <label for="CurrentPassword">Current Password:</label>
                            </div>
                        </div>
                        <div class="col s12 l6 m6 offset-l3 offset-m3 errorMessage"id="errorCurrentPassword"><?echo $currentPasswordError;?></div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3" >
                                <input id="NewPassword" type="password" class="validate" name="NewPassword" required>
                                <label for="NewPassword">New Password:</label>
                            </div>
                        </div>
                        <div class="col s12 l6 m6 offset-l3 offset-m3 errorMessage"id="errorConfirmPassword"><?echo $confirmPasswordError;?></div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3" >
                                <input id="ConfirmNewPassword" type="password" class="validate" name="ConfirmNewPassword" required>
                                <label for="ConfirmNewPassword">Confirm New Password:</label>
                            </div>
                        </div>
                        <div class="col s12 l6 m6 offset-l3 offset-m3 errorMessage"id="errorConfirmNewPassword"><?echo $confirmNewPasswordError;?></div>

                        <div class="row">
                            <div class="col s9 l2 m2 offset-l5 offset-m5 offset-s3">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Done</button><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="Margin" style="Margin-top:9.2%"></div>
        <?php include("AdminFiles/AdminFooter.php"); ?><!-- Admin Footer File -->
    </body>
</html>
