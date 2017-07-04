<!DOCTYPE html>
<html>
    <head>
        <title>Insert Stage</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'InsertFiles/InsertLinks.php' ?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Insert Stage");?>
        <?php $pageFlag = "Stage";?>
        <?php include 'InsertFiles/InsertAjax.php'?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="StageForm" method="post">
                        <input type="hidden" value="Stage" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Stage_name" type="text" class="validate" name="Stage_name">
                                <label for="Stage_name" data-error="wrong" data-success="right">Stage Name:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <textarea id="Stage_process_defination" type="text" class="validate materialize-textarea" name="Stage_process_defination"></textarea>
                                <label for="Stage_process_defination" data-error="wrong" data-success="right">Stage Description:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Stage_time" type="number" class="validate" name="Stage_time">
                                <label for="Stage_time" data-error="wrong" data-success="right">Stage Time (In Days):</label>
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
