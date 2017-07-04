<!DOCTYPE html>
<html>
    <head>
        <title>Update Farm</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>
        <?php $pageFlag = "Farm";?>
        <?php include 'UpdateFiles/UpdateAjax.php'?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Farm");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="FarmDropdown" class="active" style="font-size:15px">Farm :</label>
                        <select name="Farm_id" id="FarmDropdown">
                        <option value="">Choose Your Farm</option>
                        <?php
                            $sql="SELECT * FROM farm";
                            DynamicDropdown($sql,"Farm_name","Farm_id");
                        ?>
                    </select>
                    <div class="errorMessage"id="errorFarm_id"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row FarmPanel">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="FarmForm" method="post">
                        <input type="hidden" value="Farm" name="pageFlag">
                        <input type="hidden" name="id">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Farm_name" type="text" value=" " class="validate" name="Farm_name">
                                <label class="active" for="Farm_name"  >Farm Name:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="EmployeeDropdown"  class="active">Incharge :</label>
                                <select class="browser-default"  name="Employee_id" id="EmployeeDropdown">
                                    <option value="">Choose Your Incharge</option>
                                    <?php EmployeeDropdown(); ?>
                                </select>
                                <div class="errorMessage"id="errorEmployee_id"></div>
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

        <div class="Margin" style="Margin-top:18.3%">
        </div>

        <?php include '../StaffFiles/Footer.php'; ?>
    </body>

</html>
