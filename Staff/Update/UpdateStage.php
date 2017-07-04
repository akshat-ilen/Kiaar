<!DOCTYPE html>
<html>
    <head>
        <title>Update Stage</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>
        <?php $pageFlag = "Stage";?>
        <?php include 'UpdateFiles/UpdateAjax.php'?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Stage");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="StageDropdown" class="active" style="font-size:15px">Stage :</label>
                        <select name="Stage_id_no" id="StageDropdown">
                        <option value="">Choose Your Stage</option>
                        <?php
                            $sql="SELECT * FROM stage";
                            DynamicDropdown($sql,"Stage_name","Stage_id_no");
                        ?>
                    </select>
                    <div class="errorMessage"id="errorStage_id_no"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row StagePanel">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="StageForm" method="post">
                        <input type="hidden" value="Stage" name="pageFlag">
                        <input type="hidden" name="id">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Stage_name" value=" " type="text" class="validate" name="Stage_name">
                                <label class="active" for="Stage_name">Stage Name:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <textarea id="Stage_process_defination" value=" " type="text" class="validate materialize-textarea" name="Stage_process_defination"></textarea>
                                <label class="active" for="Stage_process_defination">Stage Description:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Stage_time" value="0" type="number" class="validate" name="Stage_time">
                                <label class="active" for="Stage_time">Stage Time (In Days):</label>
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
