<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php include '../Files/PhpFunctions.php'; ?>
        <?php include '../Files/Links.php'; ?>
        <?php include '../Files/NonSessionPage.php'?>
    </head>
    <body>

        <?php include 'MainFiles/MainHeader.php';?>
        <?php name("Login");?>
        <?php include 'LoginValidation.php';?>

        <!-- Page Flag -->
        <input type="hidden" value="Login" name="PageFlag">


        <div class="row">
            <div class="card-panel hoverable col l6 m6 s10 offset-l3 offset-m3 offset-s1 grey lighten-4 card">
                <div class="row">
                    <form method="POST" id="LoginForm" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <br><br>
                        <div class="circle-mask">
                            <img src="<?php host();?>/Files/Images/avatar_2x.png" alt="ProfilePic"/>
                        </div>
                        <br>
                        <div class="col l8 m8 s10 offset-l2 offset-m2 offset-l1 errorMessage center-align" id="errorLogin" style="font-size:20px">
                            <?php echo $error;?>
                        </div>

                        <div class="input-field col l8 m8 s10 offset-l2 offset-m2 offset-l1 ">
                            <input id="userid" name="Employee_id" type="text" class="validate" value="">
                            <label for="userid">User ID</label>
                        </div>

                        <div class="input-field col l8 m8 s10 offset-l2 offset-m2 offset-l1 ">
                            <input id="Password" name="Password" type="password" class="validate" value="">
                            <label for="Password">Password</label>
                        </div>

                        <div class="row">
                            <div class="col l3 m6 s6 offset-l3">
                                <br>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
                            </div>
                            <div class="col l6 m6 s6" style="margin-top:30px">
                                <a href="ForgotPassword.php">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
           </div>
        </div>

        <?php include 'MainFiles/MainFooter.php';?>

        <script>
            $("document").ready(function(){

                    $("#LoginForm").submit(function(){

                        LoginValidate();

                        var formCheck = $("#LoginForm").valid();
                        if(!formCheck)
                        {
                            return false;
                        }
                    });//Submit Function
            });//ready Function

            function LoginValidate()
            {
             $("#LoginForm").validate({
                 rules: {
                     Employee_id: {
                         required: true,
                         number:true
                     },
                     Password: {
                         required:true
                     }
                 },
                 messages: {
                     Employee_id: {
                         required:"UserID is required!",
                         number:"Enter digits only"
                     },
                     Password: {
                         required:"Password is required!"
                     }
                 },
                 errorElement : "div",
                 errorClass : "invalid errorMessage",
                 onsubmit: false,
             });

            }
        </script>
    </body>

</html>
