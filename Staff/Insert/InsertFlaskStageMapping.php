<!DOCTYPE html>
<html>
    <head>
        <title>Insert Flask Stage Mapping</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'InsertFiles/InsertLinks.php' ?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Insert Flask Stage Mapping");?>
        <?php $pageFlag = "FlaskStageMapping";?>
        <?php include 'InsertFiles/InsertAjax.php'?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="FlaskStageMappingForm" method="post">
                        <input type="hidden" value="FlaskStageMapping" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="FlaskDropdown" data-error="wrong" data-success="right" class="active">Flask No. :</label>
                                <select name="Flask_id" id="FlaskDropdown">
                                    <option value="">Choose Your Flask</option>
                                    <?php
                                        $sql="SELECT * FROM flask";
                                        DynamicDropdown($sql,"Flask_id","Flask_id");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorFlask_id"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <label for="StageDropdown" data-error="wrong" data-success="right" class="active">Stage No. :</label>
                                <select name="Stage_id_no" id="StageDropdown">
                                    <option value="">Choose Your Stage Number</option>
                                    <?php
                                        $sql="SELECT * FROM stage";
                                        DynamicDropdown($sql,"Stage_name","Stage_id_no");
                                    ?>
                                </select>
                                <div class="errorMessage"id="errorStage_id_no"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Entering_date" type="date" class="validate" name="Entering_date">
                                <label class="active" for="Entering_date" data-error="wrong" data-success="right">Entering Date :</label>
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
