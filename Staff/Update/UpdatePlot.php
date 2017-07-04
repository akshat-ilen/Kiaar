<!DOCTYPE html>
<html>
    <head>
        <title>Update Plot</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Plot");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="DFarmDropdown" class="active" style="font-size:15px">Farm :</label>
                        <select name="DFarm_id" id="DFarmDropdown">
                        <option value="">Choose Your Farm</option>
                        <?php
                            $sql="SELECT * FROM farm";
                            DynamicDropdown($sql,"Farm_name","Farm_id");
                        ?>
                    </select>
                    <div class="errorMessage"id="errorDFarm_id"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                        <label for="PlotDropdown" class="active">Plot :</label>
                        <select name="Plot_id" id="PlotDropdown">
                            <option value="">Choose Your Plot</option>
                            <?php
                                $sql="SELECT * FROM plot";
                                DynamicDropdown($sql,"Plot_no","Plot_id");
                            ?>
                        </select>
                        <div class="errorMessage"id="errorPlot_id"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row PlotPanel">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="PlotForm" method="post">
                        <input type="hidden" value="Plot" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Plot_no" type="text" class="validate" name="Plot_no">
                                <label class="active" for="Plot_no">Plot Number :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="FarmDropdown" class="active">Farm :</label>
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

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Area" type="number" class="validate" name="Area">
                                <label class="active" for="Area">Area :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="SoilDropdown" class="active">Soil :</label>
                                <select name="Soil_id" id="SoilDropdown">
                                    <option value="">Choose Your Soil Type</option>
                                    <?php
                                        $sql="SELECT * FROM soil";
                                        DynamicDropdown($sql,"Soil_type","Soil_id");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorSoil_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="IrrigationDropdown" class="active">Irrigation :</label>
                                <select name="Irrigation_id" id="IrrigationDropdown">
                                    <option value="">Choose Your Irrigation Type</option>
                                    <?php
                                        $sql="SELECT * FROM irrigation";
                                        DynamicDropdown($sql,"Type","Irrigation_id");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorIrrigation_id"></div>
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
