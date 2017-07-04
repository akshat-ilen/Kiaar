<?php

    if(!(isset($_SESSION)))
    {
        session_start();
    }

    if(isset($_SESSION["Employee_id"]) && isset($_SESSION["Fname"]) && isset($_SESSION["Lname"]) || isset($_SESSION["Email"]) || isset($_SESSION["Mname"]) || isset($_SESSION["Gender"]))
    {
        $SessionEmployee_id = $_SESSION["Employee_id"];
        $SessionFname = $_SESSION["Fname"];
        $SessionMname = $_SESSION["Mname"];
        $SessionLname = $_SESSION["Lname"];
        switch($_SESSION["Gender"])
        {
            case 'm' : $SessionGender = 'Mr.';break;
            case 'f' : $SessionGender = 'Ms.';break;
            default : $SessionGender = '';break;
        }
        $SessionEmail = $_SESSION["Email"];
    }
    else
    {
        header('Location: '.$hosting.'index.php');
    }

?>
<header>
    <nav class=" light-blue accent-4 z-depth-2">
        <div class="container-fluid">
            <div class="nav-wrapper">

                <a href="<?php host();?>Staff/StaffMaster.php" class="brand-logo" style="font-size:40px">KIAAR</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                <ul class="right hide-on-med-and-down">

                    <li><a href="<?php host();?>Staff/StaffMaster.php">Home</a></li>

                    <li><a class="dropdown-button" href="#!" data-activates="UpperTissueCulture">Tissue culture</a></li>
                        <ul id='UpperTissueCulture' class='dropdown-content' style="width:200px">
                            <!-- INSERT -->
                            <li><a>INSERT</a></li><li class="divider"></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertFlask.php">Flask</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertStage.php">Stage</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertTray.php">Tray</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertFlaskStageMapping.php">Flask Stage Mapping</a></li>
                            <!-- UPDATE -->
                            <li class="divider"></li><li><a>UPDATE</a></li><li class="divider"></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateFlask.php">Flask</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateStage.php">Stage</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateTray.php">Tray</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateFlaskStageMapping.php">Flask Stage Mapping</a></li>
                        </ul><!-- Tissue Culture Management -->

                    <li><a class="dropdown-button" href="#!" data-activates="UpperFarmManagement">Farm Mangement</a></li>
                        <ul id='UpperFarmManagement' class='dropdown-content' style="width:200px">
                            <!-- INSERT -->
                            <li><a>INSERT</a></li><li class="divider"></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertActivity.php">Activity</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertActivityType.php">ActivityType</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertCrop.php">Crop</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertCropVariety.php">CropVariety</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertFarm.php">Farm</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertPlot.php">Plot</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertCropPlantedOnPlot.php">Crops On Plot</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertIrrigation.php">Irrigation</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertSoil.php">Soil</a></li>
                            <!-- UPDATE -->
                            <li class="divider"></li><li><a>UPDATE</a></li><li class="divider"></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateActivity.php">Activity</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateActivityType.php">ActivityType</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateCrop.php">Crop</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateCropVariety.php">CropVariety</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateFarm.php">Farm</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdatePlot.php">Plot</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateCropPlantedOnPlot.php">Crops On Plot</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateIrrigation.php">Irrigation</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateSoil.php">Soil</a></li>
                        </ul><!-- Farm Management -->

                    <li><a class="dropdown-button" href="#!" data-activates="UpperSeedProduction">Seed Production</a></li>
                        <ul id='UpperSeedProduction' class='dropdown-content' style="width:203px">
                            <!-- INSERT -->
                            <li><a>INSERT</a></li><li class="divider"></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertSeedGivenToFarmer.php">Seed To Farmer</a></li>
                            <li><a href="<?php host();?>Staff/Insert/InsertSeedPlantedOnGreenhouse.php">Seed To Greenhouse</a></li>
                            <!-- UPDATE -->
                            <li class="divider"></li><li><a>UPDATE</a></li><li class="divider"></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateSeedGivenToFarmer.php">Seed To Farmer</a></li>
                            <li><a href="<?php host();?>Staff/Update/UpdateSeedPlantedOnGreenhouse.php">Seed To Greenhouse</a></li>
                        </ul><!-- Seed production -->

                    <li><a href="<?php host();?>Staff/SoilAnalysis/index.html">Soil Analysis</a></li>

                    <li><a class="dropdown-button" href="#!" data-activates="UpperProfileDropdown" ><i class="material-icons">perm_identity</i></a></li>
                        <ul id='UpperProfileDropdown' class='dropdown-content' style="width:200px">
                            <li><a href="<?php host();?>Staff/EditProfile.php">Edit Profile</a></li>
                            <li><a href="<?php host();?>Staff/ChangePassword.php">Change Password</a></li>
                            <li><a href="<?php host();?>Files/LogOut.php">Sign Out</a></li>
                        </ul><!-- profile -->

                    <li><a href="<?php host();?>Staff/StaffFiles/Help.php"><i class="material-icons">help_outline</i></a></li>

                </ul><!-- Nav ul -->

                <ul class="side-nav" id="mobile-demo">
                    <ul class="collapsible waves-effect waves-light" style="width:100%" data-collapsible="accordion">

                        <!-- Home Button -->
                        <li><a class="blue-text" href="<?php host();?>Staff/StaffMaster.php" style="margin-left:13px">Home</a></li>

                        <!-- Tissue Culture -->
                        <li>
                            <div class="collapsible-header" style="width: 100%;">Tissue Culture</div>
                            <div class="collapsible-body">
                                <ul>

                                    <li>
                                        <ul class="collapsible" data-collapsible="accordion">
                                            <li>
                                                <div class="collapsible-header headerbody">INSERT</div>
                                                <div class="collapsible-body">
                                                    <ul>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertFlask.php">Flask</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertStage.php">Stage</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertTray.php">Tray</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertFlaskStageMapping.php">Flask Stage Mapping</a></li>
                                                    </ul><!-- Tissue Culture Insert Body li -->
                                                </div><!-- INSERT Header Body Div -->
                                            </li><!-- Tissue Culture Insert body li -->
                                        </ul><!-- Tissue Culture Insert ul-->
                                    </li><!-- Tissue Culture Insert li-->

                                    <li>
                                        <ul class="collapsible" data-collapsible="accordion">
                                            <li>
                                                <div class="collapsible-header headerbody">UPDATE</div>
                                                <div class="collapsible-body">
                                                    <ul>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateFlask.php">Flask</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateStage.php">Stage</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateTray.php">Tray</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateFlaskStageMapping.php">Flask Stage Mapping</a></li>
                                                    </ul><!-- Tissue Culture Update` Body li -->
                                                </div><!-- INSERT Header Body Div -->
                                            </li><!-- Tissue Culture Update` body li -->
                                        </ul><!-- Tissue Culture Update` ul-->
                                    </li><!-- Tissue Culture Update` li-->

                                </ul><!-- Tissue Culture Collapsible ul-->
                            </div><!-- Tissue Culture Collapsible Body -->
                        </li><!-- Tissue Culture Li -->

                        <!-- Farm management -->
                        <li>
                            <div class="collapsible-header" style="width: 100%;">Farm Management</div>
                            <div class="collapsible-body">
                                <ul>

                                    <li>
                                        <ul class="collapsible" data-collapsible="accordion">
                                            <li>
                                                <div class="collapsible-header headerbody">INSERT</div>
                                                <div class="collapsible-body">
                                                    <ul>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertActivity.php">Activity</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertActivityType.php">ActivityType</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertCrop.php">Crop</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertCropVariety.php">CropVariety</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertFarm.php">Farm</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertPlot.php">Plot</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertCropPlantedOnPlot.php">Crops On Plot</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertIrrigation.php">Irrigation</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertSoil.php">Soil</a></li>
                                                    </ul><!-- Farm Management Insert Body li -->
                                                </div><!-- INSERT Header Body Div -->
                                            </li><!-- Farm Management Insert body li -->
                                        </ul><!-- Farm Management Insert ul-->
                                    </li><!-- Farm Management Insert li-->

                                    <li>
                                        <ul class="collapsible" data-collapsible="accordion">
                                            <li>
                                                <div class="collapsible-header headerbody">UPDATE</div>
                                                <div class="collapsible-body">
                                                    <ul>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateActivity.php">Activity</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateActivityType.php">ActivityType</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateCrop.php">Crop</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateCropVariety.php">CropVariety</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateFarm.php">Farm</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdatePlot.php">Plot</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateCropPlantedOnPlot.php">Crops On Plot</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateIrrigation.php">Irrigation</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateSoil.php">Soil</a></li>
                                                    </ul><!-- Farm Managment Update` Body li -->
                                                </div><!-- Update Header Body Div -->
                                            </li><!-- Farm Managment Update` body li -->
                                        </ul><!-- Farm Managment Update` ul-->
                                    </li><!-- Farm Managment Update` li-->

                                </ul><!-- Farm Managment Collapsible ul-->
                            </div><!-- Farm Managment Collapsible Body -->
                        </li><!-- Farm Managment Li -->

                        <!-- Seed Production -->
                        <li>
                            <div class="collapsible-header" style="width: 100%;">Seed Production</div>
                            <div class="collapsible-body">
                                <ul>

                                    <li>
                                        <ul class="collapsible" data-collapsible="accordion">
                                            <li>
                                                <div class="collapsible-header headerbody">INSERT</div>
                                                <div class="collapsible-body">
                                                    <ul>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertSeedGivenToFarmer.php">Seed To Farmer</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Insert/InsertSeedPlantedOnGreenhouse.php">Seed To Greenhouse</a></li>
                                                    </ul><!-- Seed Production Insert Body li -->
                                                </div><!-- INSERT Header Body Div -->
                                            </li><!-- Seed Production Insert body li -->
                                        </ul><!-- Seed Production Insert ul-->
                                    </li><!-- Seed Production Insert li-->

                                    <li>
                                        <ul class="collapsible" data-collapsible="accordion">
                                            <li>
                                                <div class="collapsible-header headerbody">UPDATE</div>
                                                <div class="collapsible-body">
                                                    <ul>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateSeedGivenToFarmer.php">Seed To Farmer</a></li>
                                                        <li><a class="blue-text" href="<?php host();?>Staff/Update/UpdateSeedPlantedOnGreenhouse.php">Seed To Greenhouse</a></li>
                                                    </ul><!-- Seed Production Update` Body li -->
                                                </div><!-- Update Header Body Div -->
                                            </li><!-- Seed Production Update` body li -->
                                        </ul><!-- Seed Production Update` ul-->
                                    </li><!-- Seed Production Update` li-->

                                </ul><!-- Seed Production Collapsible ul-->
                            </div><!-- Seed Production Collapsible Body -->
                        </li><!-- Seed Production Li -->

                        <!-- Soil Analysis -->
                        <li><a class="blue-text" href="<?php host();?>Staff/SoilAnalysis/index.html" style="margin-left:13px">Soil Analysis</a></li>

                        <!-- Profile -->
                        <li>
                            <div class="collapsible-header" style="width: 100%; margin-left:-10px">Profile<i class="material-icons">perm_identity</i></div>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a class="blue-text" href="<?php host();?>/Staff/EditProfile.php">Edit Profile</a></li>
                                    <li><a class="blue-text" href="<?php host();?>/Staff/ChangePassword.php">Change Password</a></li>
                                    <li><a class="blue-text" href="<?php host();?>Files/LogOut.php">Sign Out</a></li>
                                </ul><!-- Seed Production Insert Body li -->
                            </div><!-- Seed Production Collapsible Body -->
                        </li><!-- Seed Production Li -->

                        <li><a class="blue-text" href="<?php host();?>Staff/StaffFiles/Help.php" style="margin-left:-12px"><i class="material-icons">help</i></a></li>

                    </ul><!--  Main collapsible -->

                </ul><!-- side-nav -->

            </div><!-- nav-wrapper -->
        </div><!-- container-fluid -->
    </nav><!-- Vertical Navbar -->
</header>
