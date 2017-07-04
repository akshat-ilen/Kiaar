<!DOCTYPE html>
<html>
    <head>
        <title>Welcome To Kiaar</title>
        <?php include 'Files/PhpFunctions.php'; ?>
        <?php include 'Files/Links.php'; ?>
        <?php include 'Main/MainFiles/MainLinks.php'; ?>
        <?php include 'Files/NonSessionPage.php'?>
        <style media="screen">
            .carousalBox{
                background-color: rgba(33, 33, 33, 0.6);
                padding:15px;
            }
        </style>
    </head>
    <body>

        <?php include 'Main/MainFiles/MainHeader.php'; ?>

        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="<?php host();?>/Files/Images/PC230047.jpg"> <!-- random image -->
                    <div class="caption center-align white-text carousalBox">
                        <h3>KIAAR</h3>
                        <h5 class="white-text">KIAAR is a voluntary centre for testing varieties under the AICRP-5 on Sugarcane.</h5>
                    </div>
                </li>
                <li>
                    <img src="<?php host();?>/Files/Images/DSC_0040.jpg"> <!-- random image -->
                    <div class="caption left-align white-text carousalBox">
                        <h3>Greenhouse</h3>
                        <h5 class="white-text">The major objective is to produce disease free sets of commercial varieties. This is all the more important as the seed production ratio is 1:10.</h5>
                    </div>
                </li>
                <li>
                    <img src="<?php host();?>/Files/Images/PC230044.jpg"> <!-- random image -->
                    <div class="caption right-align white-text carousalBox">
                        <h3>Drip Irrigation</h3>
                        <h5 class="white-text">The Staff of cane department collects soil samples from farmer's fields of different clusters and suppliers them to laboratory.</h5>
                    </div>
                </li>
                <li>
                    <img src="<?php host();?>/Files/Images/DSC_0339.jpg"> <!-- random image -->
                    <div class="caption center-align white-text carousalBox">
                        <h3>Tissue Culture</h3>
                        <h5 class="white-text">Through meristem and heat therapy ,We produce disease free foundation seeds of Sugarcane and run three tier Nursery Programme</h5>
                    </div>
                </li>
                <li>
                    <img src="<?php host();?>/Files/Images/P1270066.jpg"> <!-- random image -->
                    <div class="caption left-align white-text carousalBox">
                        <h3>Treatment Mechanisms</h3>
                        <h5 class="white-text">To make best use of production resources and improve profitability of sugarcane cropping system</h5>
                    </div>
                </li>
            </ul>
        </div>

        <?php include 'Main/MainFiles/MainFooter.php'; ?>
    </body>
</html>
