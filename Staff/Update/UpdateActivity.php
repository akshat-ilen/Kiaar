<!DOCTYPE html>
<html>
    <head>
        <title>Update Activity</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Activity");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="ActivityDropdown" class="active" style="font-size:15px">Activity ID :</label>
                        <select name="Activity_id" id="ActivityDropdown">
                        <option value="">Choose Your Option</option>
                        <?php
                            $sql="SELECT * FROM activity";
                            DynamicDropdown($sql,"Activity_id","Activity_id");
                        ?>
                    </select>
                    <div class="errorMessage"id="errorActivity_id"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ActivityPanel">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="ActivityForm" method="post">
                        <input type="hidden" value="Activity" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="ActivityTypeDropdown" class="active">Activity Type:</label>
                                <select class="browser-default" class="browser-default" name="Activity_type_id" id="ActivityTypeDropdown">
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
                                <input id="Activity_amount" type="number" class="validate" value="0" name="Activity_amount">
                                <label class="active" for="Activity_amount">Acitvity Amount:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Start_date" type="date" class="validate" name="Start_date">
                                <label class="active" for="Start_date" class="active">Start Date:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Expected_end_date" type="date" class="validate" name="Expected_end_date">
                                <label class="active" for="Expected_end_date">Expected End Date:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Actual_end_date" type="date" class="validate" name="Actual_end_date">
                                <label class="active" for="Actual_end_date">Actual End Date:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Remark" type="text" value=" " class="validate" name="Remark">
                                <label class="active" for="Remark">Remark :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Creation_date" type="date" class="validate" name="Creation_date">
                                <label class="active" for="Creation_date">Creation Date:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="FarmDropdown" class="active">Farm:</label>
                                <select class="browser-default" name="Farm_id" id="FarmDropdown" onchange="plotdropdown(this.value)">
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
                                <label for="PlotDropdown" class="active">Plot :</label>
                                <select class="browser-default" name="Plot_id" id="PlotDropdown">
                                    <option value="">Choose Your Plot</option>
                                </select>
                                <div class="errorMessage"id="errorPlot_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Area" type="number" value="0" class="validate" name="Area">
                                <label class="active" for="Area">Area :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="CropDropdown" class="active">Crop:</label>
                                <select class="browser-default" name="Crop_id" id="CropDropdown" onchange="cropvarietydropdown(this.value)">
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
                                <label for="CropVarietyDropdown" class="active">Crop Variety:</label>
                                <select class="browser-default" name="Variety_id" id="CropVarietyDropdown">
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

        <div class="Margin" style="Margin-top:10%">
        </div>

        <?php include '../StaffFiles/Footer.php'; ?>
        <script type="text/javascript">

        </script>
    </body>

</html>
