<!DOCTYPE html>
<html>
    <head>
        <title>Update Crop</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>
        <?php $pageFlag = "Crop";?>
        <?php include 'UpdateFiles/UpdateAjax.php'?>


    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Crop");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="CropDropdown" class="active" style="font-size:15px">Crop :</label>
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
            </div>
        </div>

        <div class="row CropPanel">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="CropForm" method="post">
                            <input type="hidden" value="Crop" name="pageFlag">
                            <input type="hidden" name="id">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Crop_name" value=" "type="text" class="validate" name="Crop_name">
                                <label class="active" for="Crop_name">Crop Name:</label>
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
