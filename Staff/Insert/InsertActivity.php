<!DOCTYPE html>
<html>
    <head>
        <title>Insert Activity</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'InsertFiles/InsertLinks.php' ?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Insert Activity");?>
        <?php $pageFlag = "Activity";?>
        <?php include 'InsertFiles/InsertAjax.php';?>


        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="ActivityForm" method="post" action="<?php host();?>Staff/Insert/InsertActivity.php">
                        <input type="hidden" value="Activity" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="ActivityTypeDropdown"  class="active">Activity Type:</label>
                                <select name="Activity_type_id" id="ActivityTypeDropdown">
                                    <option value="">Choose Your Activity Type</option>
                                    <?php
                                        $sql="SELECT * FROM activity_type";
                                        DynamicDropdown($sql,"Activity_name","Activity_type_id");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorActivity_type_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Activity_amount" type="number" class="validate" name="Activity_amount">
                                <label for="Activity_amount" >Acitvity Amount:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Start_date" type="date" class="validate" name="Start_date">
                                <label class="active" for="Start_date"  class="active">Start Date:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Expected_end_date" type="date" class="validate" name="Expected_end_date">
                                <label class="active" for="Expected_end_date" >Expected End Date:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Remark" type="text" class="validate" name="Remark">
                                <label for="Remark" >Remark :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Creation_date" type="date" class="validate" name="Creation_date">
                                <label class="active" for="Creation_date" >Creation Date:</label>
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
                                <input id="Area" type="number" class="validate" name="Area">
                                <label for="Area" >Area :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="CropDropdown"  class="active">Crop:</label>
                                <select name="Crop_id" id="CropDropdown" onchange="cropvarietydropdown(this.value)">
                                    <option value="">Choose Your Crop</option>
                                    <?php
                                        $sql="SELECT * FROM crop";
                                        DynamicDropdown($sql,"Crop_name","Crop_id");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorCrop_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="CropVarietyDropdown"  class="active">Crop Variety:</label>
                                <select class="browser-default dd" name="Variety_id" id="CropVarietyDropdown">
                                    <option value="">Choose Your Crop Variety</option>
                                </select>
                                <div class="errorMessage"id="errorVariety_id"></div>
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
