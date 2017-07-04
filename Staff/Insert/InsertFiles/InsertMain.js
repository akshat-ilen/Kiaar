$("document").ready(function(){

    var pageFlag = $("[name='pageFlag']").val();

    switch(pageFlag)
    {
        case "Activity" : Activity(); break;
        case "ActivityType" : ActivityType(); break;
        case "Crop" : Crop(); break;
        case "CropPlantedOnPlot" : CropPlantedOnPlot(); break;
        case "CropVariety" : CropVariety(); break;
        case "Farm" : Farm(); break;
        case "Flask" : Flask(); break;
        case "FlaskStageMapping" : FlaskStageMapping(); break;
        case "Irrigation" : Irrigation(); break;
        case "Plot" : Plot(); break;
        case "SeedGivenToFarmer" : SeedGivenToFarmer(); break;
        case "SeedPlantedOnGreenHouse" : SeedPlantedOnGreenHouse(); break;
        case "Stage" : Stage(); break;
        case "Soil" : Soil(); break;
        case "Tray" : Tray(); break;
    }


});


/*--------------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------------*/

/*---------------Calling Functions-------------------------*/


/*--------------------------------Activity Page---------------------------------*/
function Activity()
{
    $("#ActivityForm").submit(function(){

        ValidateActivity();
        var formCheck = $("#ActivityForm").valid();
        var Check = DropDownActivity() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------ActivityType Page---------------------------------*/
function ActivityType()
{
    $("#ActivityTypeForm").submit(function(){

        ValidateActivityType();
        var formCheck = $("#ActivityTypeForm").valid();
        var Check = DropDownActivityType() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------Crop Page---------------------------------*/
function Crop()
{
    $("#CropForm").submit(function(){

        ValidateCrop();
        var formCheck = $("#CropForm").valid();
        var Check = DropDownCrop() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------CropPlantedOnPlot Page---------------------------------*/
function CropPlantedOnPlot()
{
    $("#CropPlantedOnPlotForm").submit(function(){

        ValidateCropPlantedOnPlot();
        var formCheck = $("#CropPlantedOnPlotForm").valid();
        var Check = DropDownCropPlantedOnPlot() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------CropVariety Page---------------------------------*/
function CropVariety()
{
    $("#CropVarietyForm").submit(function(){

        ValidateCropVariety();
        var formCheck = $("#CropVarietyForm").valid();
        var Check = DropDownCropVariety() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------Farm Page---------------------------------*/
function Farm()
{
    $("#FarmForm").submit(function(){

        ValidateFarm();
        var formCheck = $("#FarmForm").valid();
        var Check = DropDownFarm() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------Flask Page---------------------------------*/
function Flask()
{
    $("#FlaskForm").submit(function(){

        ValidateFlask();
        var formCheck = $("#FlaskForm").valid();
        var Check = DropDownFlask() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------FlaskStageMapping Page---------------------------------*/
function FlaskStageMapping()
{
    $("#FlaskStageMappingForm").submit(function(){

        ValidateFlaskStageMapping();
        var formCheck = $("#FlaskStageMappingForm").valid();
        var Check = DropDownFlaskStageMapping() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------Irrigation Page---------------------------------*/
function Irrigation()
{
    $("#IrrigationForm").submit(function(){

        ValidateIrrigation();
        var formCheck = $("#IrrigationForm").valid();
        var Check = DropDownIrrigation() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------Plot Page---------------------------------*/
function Plot()
{
    $("#PlotForm").submit(function(){

        ValidatePlot();
        var formCheck = $("#PlotForm").valid();
        var Check = DropDownPlot() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------SeedGivenToFarmer Page---------------------------------*/
function SeedGivenToFarmer()
{
    $("#SeedGivenToFarmerForm").submit(function(){

        ValidateSeedGivenToFarmer();
        var formCheck = $("#SeedGivenToFarmerForm").valid();
        var Check = DropDownSeedGivenToFarmer() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------SeedPlantedOnGreenHouse Page---------------------------------*/
function SeedPlantedOnGreenHouse()
{
    $("#SeedPlantedOnGreenHouseForm").submit(function(){

        ValidateSeedPlantedOnGreenHouse();
        var formCheck = $("#SeedPlantedOnGreenHouseForm").valid();
        var Check = DropDownSeedPlantedOnGreenHouse() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------Stage Page---------------------------------*/
function Stage()
{
    $("#StageForm").submit(function(){

        ValidateStage();
        var formCheck = $("#StageForm").valid();
        var Check = DropDownStage() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------Soil Page---------------------------------*/
function Soil()
{
    $("#SoilForm").submit(function(){

        ValidateSoil();
        var formCheck = $("#SoilForm").valid();
        var Check = DropDownSoil() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*--------------------------------Tray Page---------------------------------*/
function Tray()
{
    $("#TrayForm").submit(function(){

        ValidateTray();
        var formCheck = $("#TrayForm").valid();
        var Check = DropDownTray() && formCheck;

        if(!Check)
        {
            return false;
        }

    });
}

/*------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------*/
/*-----------------------------Dropdown Display Function------------------------------------------------------*/

function cropvarietydropdown(str)
{
    if (str === "")
    {
        document.getElementById("CropVarietyDropdown").innerHTML = "<option value=''>Choose Your Crop Variety</option>";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("CropVarietyDropdown").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","Dropdown.php?c="+str+"&q=c",true);
        xmlhttp.send();
    }
}

function plotdropdown(str)
{
    if (str === "")
    {
        document.getElementById("PlotDropdown").innerHTML = "<option value=''>Choose Your Plot</option>";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("PlotDropdown").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","Dropdown.php?c="+str+"&q=p",true);
        xmlhttp.send();
    }
}
