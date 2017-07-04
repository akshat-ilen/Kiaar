<!DOCTYPE html>
<html>
    <head>
      <title>Create Account</title>
      <?php include '../Files/PhpFunctions.php'; ?>
      <?php include '../Files/Links.php'; ?>
      <?php include 'AdminFiles/AdminLinks.php'; ?>
    </head>

    <body>
        <?php include("AdminFiles/AdminHeader.php"); ?><!-- Admin Header File -->

        <?php name("Create Account");?>

        <!-- Page Flag -->
        <input type="hidden" value="CreateAccount" name="PageFlag">

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1"><br>
                <div class="row">
                    <form class="col s12" id="CreateAccountForm" method="post">

                        <div class="row">
                            <div class="input-field col s12 l8 m6 offset-l2">
                                <input id="Employee_id" type="text" class="validate" name="Employee_id">
                                <label for="Employee_id">Employee ID:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l8 m6 offset-l2">
                                <input id="Fname" type="text" class="validate" name="Fname">
                                <label for="Fname">First Name:</label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col s12 l8 m6 offset-l2">
                                <input id="Lname" type="text" class="validate" name="Lname">
                                <label for="Lname">Last Name:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l8 m6 offset-l2">
                                <input id="Email" type="text" class="validate" name="Email">
                                <label for="Email">Email-ID:</label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col s10 l4 m4  offset-l5 offset-m4 offset-s3">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include("AdminFiles/AdminFooter.php"); ?><!-- Admin Footer File -->
    </body>
</html>
