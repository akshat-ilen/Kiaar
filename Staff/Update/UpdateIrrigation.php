<!DOCTYPE html>
<html>
    <head>
        <title>Update Irrigation</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>
        <?php $pageFlag = "Irrigation";?>
        <?php include 'UpdateFiles/UpdateAjax.php'?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Irrigation");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="IrrigationDropdown" class="active" style="font-size:15px">Irrigation :</label>
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
            </div>
        </div>

        <div class="row IrrigationPanel">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="IrrigationForm" method="post">
                        <input type="hidden" value="Irrigation" name="pageFlag">
                        <input type="hidden" name="id">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Type" type="text" value=" " class="validate" name="Type">
                                <label active="active" for="Type">Irrigation Type:</label>
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
