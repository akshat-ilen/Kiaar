<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
        <?php include '../Files/PhpFunctions.php'; ?>
        <?php include '../Files/Links.php'; ?>
        <script src="StaffAjax.js" charset="utf-8"></script>

    </head>
    <body>

        <?php include 'StaffFiles/StaffHeader.php';?>
        <?php name("Edit Profile");?>

        <div class="EditAccountForm row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form id="EmployeeForm" method ="post" class="col s12 m12 l12">
                        <input type="hidden" value="" name="hideEmployeeId">
                        <div class="row">
                            <div class="input-field col s12 l4 m4">
                                <input value=" " id="Fname" type="text" class="validate" name="Fname">
                                <label class="active" for="Fname">First Name:</label>
                            </div>
                            <div class="input-field col s12 l4 m4">
                                <input value=" " id="Mname" type="text" class="validate" name="Mname">
                                <label class="active" for="Mname">Middle Name:</label>
                            </div>
                            <div class="input-field col s12 l4 m4">
                                <input value=" " id="Lname" type="text" class="validate" name="Lname">
                                <label class="active" for="Lname">Last Name:</label>
                            </div>
                        </div>

                        <div class="row"></div>

                            <!-- New Line -->
                        <div clas="row">
                            <div class="input-field col s12 l6 m6">
                                <input value=" " type="date" class="validate" id="Date_of_birth" name="Date_of_birth">
                                <label class="active" for="Date_of_birth">Date of Birth:</label>
                            </div>
                            <div class="input-field col s12 l6 m6">
                                <input value=" " type="date" class="validate" id="Date_of_joining" name="Date_of_joining">
                                <label class="active" for="Date_of_joining">Date of Joining:</label>
                            </div>
                        </div>

                        <div class="row"></div>

                            <!-- New Line -->
                        <div class="row">
                            <div class="input-field col s3 l2 m3">
                                 <label for="Gender" >Gender:</label>
                            </div>
                            <div class="input-field col s3 l2 m3">
                                <input id="male" name="Gender" class="with-gap" type="radio" class="validate" value="m">
                                <label for="male" >Male</label>
                            </div>
                            <div class="input-field col s3 l2 m3">
                              <input id="female" class="with-gap" name="Gender" type="radio" class="validate" value="f">
                              <label for="female" >Female</label>
                            </div>
                            <div class="input-field col l12 m12 s12">
                                <div class="errorMessage" id="errorGender"></div>
                            </div>
                        </div>

                        <!-- New Line -->

                        <div class="row">
                            <div class="input-field col s12 l12 m12">
                                <textarea value=" " id="Address" class="materialize-textarea validate" name="Address"> </textarea>
                                <label class="active" for="Address">Address :</label>
                            </div>
                        </div>

                        <!-- New Line -->

                        <div class="row">
                            <div class="input-field col s12 l6 m6">
                                <input value="1" type="number" class="validate" id="Contact_no" name="Contact_no">
                                <label class="active" for="Contact_no">Contact Number:</label>
                            </div>
                            <div class="input-field col s12 l6 m6">
                                <input value="example@abc.com" id="Email" type="email" class="validate" name="Email">
                                <label class="active" data-error="" for="Email">Email ID:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s9 l2 m2 offset-l5 offset-m5 offset-s3">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Done
                                </button><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <?php include 'StaffFiles/Footer.php'; ?>
    </body>

</html>
