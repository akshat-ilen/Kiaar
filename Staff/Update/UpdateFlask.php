<!DOCTYPE html>
<html>
    <head>
        <title>Update Flask</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>
        <?php $pageFlag = "Flask";?>
        <?php include 'UpdateFiles/UpdateAjax.php'?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Flask");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="FlaskDropdown" class="active" style="font-size:15px">Flask :</label>
                        <select name="Flask_id" id="FlaskDropdown">
                        <option value="">Choose Your Flask</option>
                        <?php
                            $sql="SELECT * FROM flask";
                            DynamicDropdown($sql,"Flask_id","Flask_id");
                        ?>
                    </select>
                    <div class="errorMessage"id="errorFlask_id"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row FlaskPanel">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="FlaskForm" method="post">
                        <input type="hidden" value="Flask" name="pageFlag">
                        <input type="hidden" name="id">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Create_date" type="date" class="validate" name="Create_date">
                                <label class="active" for="Create_date">Create Date :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="End_date" type="date" class="validate" name="End_date">
                                <label class="active" for="End_date">End Date :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="EmployeeDropdown" class="active">Incharge :</label>
                                <select class="browser-default" name="Employee_id" id="EmployeeDropdown">
                                    <option value="">Choose Your Incharge</option>
                                    <?php EmployeeDropdown(); ?>
                                </select>
                                <div class="errorMessage"id="errorEmployee_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="SpeciesDropdown" class="active">Species Type :</label>
                                <select class="browser-default" name="Variety_id" id="SpeciesDropdown">
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
                                <input value="0" id="No_flask" type="number" class="validate" name="No_flask">
                                <label class="active" for="No_flask">Number Of Flask:</label>
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

        <div class="Margin" style="Margin-top:10%">
        </div>

        <?php include '../StaffFiles/Footer.php'; ?>
    </body>

</html>
