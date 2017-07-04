<!DOCTYPE html>
<html>
    <head>
        <title>Update Activity Type</title>
        <?php include '../../Files/PhpFunctions.php'; ?>
        <?php include '../../Files/Links.php'; ?>
        <?php include 'UpdateFiles/UpdateLinks.php'?>
        <?php $pageFlag = "ActivityType";?>
        <?php include 'UpdateFiles/UpdateAjax.php'?>

    </head>
    <body>

        <?php include '../StaffFiles/StaffHeader.php';?>
        <?php name("Update Activity Type");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row" >
                    <div class="input-field col s12 l6 m6 offset-l3 offset-m3" style="margin-top:40px">
                        <label for="ActivityTypeDropdown" class="active" style="font-size:15px">Activity Type :</label>
                        <select name="Activity_type_id" id="ActivityTypeDropdown">
                        <option value="">Choose Your Activity Type</option>
                        <?php
                            $sql="SELECT * FROM activity_type";
                            DynamicDropdown($sql,"Activity_name","Activity_type_id");
                        ?>
                    </select>
                    <div class="errorMessage"id="errorActivity_type_id"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ActivityTypePanel">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1">
                <div class="row">
                    <form class="col s12" id="ActivityTypeForm" method="post">
                        <input type="hidden" value="ActivityType" name="pageFlag">
                        <input type="hidden" name="id">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 offset-l3 offset-m3">
                                <input id="Activity_name" type="text" class="validate" value=" " name="Activity_name">
                                <label class="active" for="Activity_name">Activity Name :</label>
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
