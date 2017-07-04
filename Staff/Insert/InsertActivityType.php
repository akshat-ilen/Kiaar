<!DOCTYPE html>
<html>
    <head>
        <title>Insert Activity Type</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'InsertFiles/InsertLinks.php' ?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Insert Activity Type");?>
        <?php $pageFlag = "ActivityType";?>
        <?php include 'InsertFiles/InsertAjax.php'?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="ActivityTypeForm" method="post">
                        <input type="hidden" value="ActivityType" name="pageFlag">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Activity_name" type="text" class="validate" name="Activity_name">
                                <label for="Activity_name" data-error="wrong" data-success="right">Activity Name :</label>
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
