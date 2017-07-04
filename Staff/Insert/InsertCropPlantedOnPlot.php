<!DOCTYPE html>
<html>
    <head>
        <title>Insert Crop Planted On Plot</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'InsertFiles/InsertLinks.php' ?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Insert Crop Planted On Plot");?>
        <?php $pageFlag = "CropPlantedOnPlot";?>
        <?php include 'InsertFiles/InsertAjax.php'?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="CropPlantedOnPlotForm" method="post">
                        <input type="hidden" value="CropPlantedOnPlot" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Planting_date" type="date" class="validate" name="Planting_date">
                                <label class="active" for="Planting_date" >Planting Date:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="FarmDropdown"  class="active">Farm:</label>
                                <select name="Farm_id" id="FarmDropdown" onchange="plotdropdown(this.value)">
                                    <option value="">Choose Your Farm</option>
                                    <?php
                                        $sql="SELECT * FROM farm";
                                        DynamicDropdown($sql,"Farm_name","Farm_id");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorFarm_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="PlotDropdown"  class="active">Plot :</label>
                                <select class="browser-default" name="Plot_id" id="PlotDropdown">
                                    <option value="">Choose Your Plot</option>
                                </select>
                                <div class="errorMessage"id="errorPlot_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="TrayDropdown"  class="active">Tray :</label>
                                <select name="Tray_id" id="TrayDropdown">
                                    <option value="">Choose Your Tray Number</option>
                                    <?php
                                        $sql="SELECT * FROM tray";
                                        DynamicDropdown($sql,"Tray_no","Tray_id");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorTray_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="No_seed_generated" type="number" class="validate" name="No_seed_generated">
                                <label for="No_seed_generated" >Number Of Seeds Generated:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Heating_date" type="date" class="validate" name="Heating_date">
                                <label class="active" for="Heating_date" >Heating Date:</label>
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
