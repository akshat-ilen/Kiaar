<!DOCTYPE html>
<html>
    <head>
        <title>Insert Flask</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'InsertFiles/InsertLinks.php' ?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Insert Flask");?>
        <?php $pageFlag = "Flask";?>
        <?php include 'InsertFiles/InsertAjax.php'?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="FlaskForm" method="post">
                        <input type="hidden" value="Flask" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Create_date" type="date" class="validate" name="Create_date">
                                <label class="active" for="Create_date" data-error="wrong" data-success="right">Create Date :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="EmployeeDropdown" data-error="wrong" data-success="right" class="active">Incharge :</label>
                                <select name="Employee_id" id="EmployeeDropdown">
                                    <option value="">Choose Your Incharge</option>
                                    <?php EmployeeDropdown(); ?>
                                </select>
                                <div class="errorMessage"id="errorEmployee_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="SpeciesDropdown" data-error="wrong" data-success="right" class="active">Species Type :</label>
                                <select name="Variety_id" id="SpeciesDropdown">
                                    <option value="">Choose Your Species Type</option>
                                    <?php
                                        $sql="SELECT * FROM crop_variety";
                                        DynamicDropdown($sql,"Variety_name","Variety_id");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorVariety_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="No_flask" type="number" class="validate" name="No_flask">
                                <label for="No_flask" data-error="wrong" data-success="right">Number Of Flask:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 l4 m4 offset-l3 offset-m3">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button><br><br>
                            </div>
                            <div class="col s6 l4 m4">
                                <button class="btn waves-effect waves-light">
                                    &nbsp;&nbsp;<a href="<?php host();?>Staff/StaffMaster.php" style="color:white">Back</a>&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <?php include '../StaffFiles/Footer.php'; ?>
    </body>

</html>
