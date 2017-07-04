<!DOCTYPE html>
<html>
    <head>
        <title>Update Crop Variety</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Crop Variety");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="DCropDropdown" class="active" style="font-size:15px">Crop :</label>
                        <select name="DCrop_id" id="DCropDropdown">
                        <option value="">Choose Your Crop</option>
                        <?php
                            $sql="SELECT * FROM crop";
                            DynamicDropdown($sql,"Crop_name","Crop_id");
                        ?>
                    </select>
                    <div class="errorMessage"id="errorDCrop_id"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                        <label for="DCropVarietyDropdown" data-error="wrong" data-success="right" class="active">Crop Variety:</label>
                        <select name="DVariety_id" id="DCropVarietyDropdown">
                            <option value="">Choose Your Crop Variety</option>
                            <?php
                                $sql="SELECT * FROM crop_variety";
                                DynamicDropdown($sql,"Variety_name","Variety_id");
                            ?>
                        </select>
                        <div class="errorMessage"id="errorDVariety_id"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="CropVarietyForm" method="post">
                        <input type="hidden" value="CropVariety" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="CropDropdown" data-error="wrong" data-success="right" class="active">Crop:</label>
                                <select name="Crop_id" id="CropDropdown">
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
                                <input id="Variety_name" type="text" class="validate" name="Variety_name">
                                <label for="Variety_name" >Crop Variety Name:</label>
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
