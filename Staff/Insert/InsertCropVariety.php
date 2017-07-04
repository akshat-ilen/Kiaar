<!DOCTYPE html>
<html>
    <head>
        <title>Insert Crop Variety</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'InsertFiles/InsertLinks.php' ?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Insert Crop Variety");?>
        <?php $pageFlag = "CropVariety";?>
        <?php include 'InsertFiles/InsertAjax.php'?>

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
                                <label for="Variety_name" data-error="wrong" data-success="right">Crop Variety Name:</label>
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
