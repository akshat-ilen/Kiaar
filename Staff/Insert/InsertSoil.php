<!DOCTYPE html>
<html>
    <head>
        <title>Insert Soil</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'InsertFiles/InsertLinks.php' ?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Insert Soil");?>
        <?php $pageFlag = "Soil";?>
        <?php include 'InsertFiles/InsertAjax.php'?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="SoilForm" method="post">
                        <input type="hidden" value="Soil" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Soil_type" type="text" class="validate" name="Soil_type">
                                <label for="Soil_type" data-error="wrong" data-success="right">Soil Type:</label>
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
