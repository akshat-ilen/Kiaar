<!DOCTYPE html>
<html>
    <head>
        <title>Staff</title>
        <?php include '../Files/PhpFunctions.php'; ?>
        <?php include '../Files/Links.php'; ?>

    </head>
    <body>

        <?php include 'StaffFiles/StaffHeader.php';?>
        <?php name("Welcome To KIAAR");?>
        <?php name($SessionGender." ".$SessionFname." ".$SessionLname);?>

        <div class="row">
            <div class="card-panel col l6 m8 s8 offset-l3 offset-m2 offset-s2"><br>
                <div class="row">
                    K.J.Somaiya Institute of Applied Agriculture and Research,Sameerwadi,Karnataka is an institute providing hand me down technologies to the farmers.KIAAR has various departments and they are as follows:
                    <br><br>1)Tissue Culture Management:
                    Here a part of the crop is taken and being developed into a plantlet.Approximately 5000 plantlets are grown every month which are then planted into the greenhouse and then on the field.
                    There are 3 stages of tissue culture.The part of plant is first put into media and then left to grow.After certain time Cytokinin is added and during second stage Auxin is added.The Planlets are then transfered to grenhouse.

                    <br><br>2)Soil Science lab:
                    Here soil analysis is done.Soil from various plot is being checked for the presence of various nutrients and then fertilizers for that soil are recommended accordingly.The module soil analysis does the automatic calculation of the fertilizer needed
                    in kg and the also specifies the type of fertilizer.

                    <br><br>3)Farm Management:
                    Here in this  module the details regarding the plots in the farm will be stored.The variety of the crops grown, crop name,details of the incharge etc will be stored.
                </div>
            </div>
        </div>


        <?php include 'StaffFiles/Footer.php'; ?>
    </body>

</html>
