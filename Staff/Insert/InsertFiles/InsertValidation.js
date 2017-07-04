/*--------------------------------------Activity Type Page-------------------------------------------*/
function ValidateActivity()
{
    $("#ActivityForm").validate({
        rules: {
            Activity_amount : {
                required : true,
            },
            Start_date : {
                required : true,
                DateVal : true,
            },
            Expected_end_date : {
                required : true,
                ActivityDateStart : true,
            },
            Remark : {
                required : true,
                alphaNumeric : true,
            },
            Creation_date : {
                required : true,
                DateVal : true,
            },
            Area : {
                required : true,
            },
        },
        messages: {
            Activity_amount : {
                required : "Please Enter Activity Amount",
            },
            Start_date : {
                required : "Please Enter Start Date",
                DateVal : "Start Date Cannot be Greater Today's Date"
            },
            Expected_end_date : {
                required : "Please Enter Expected End Date",
                ActivityDateStart : "End Date cannot be less than Start Date",
            },
            Remark : {
                required : "Please Enter Remark",
            },
            Creation_date : {
                required : "Please Enter Creation Date",
                DateVal : "Creation Date Cannot be Greater Today's Date"
            },
            Area : {
                required : "Please Enter Area",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownActivity()
{
    if(dropdown("Activity_type_id"))
    {
        flag = true;
    }
    if(dropdown("Activity_type_id"))
    {
        flag = true;
    }
    if(dropdown("Plot_id"))
    {
        flag = true;
    }
    if(dropdown("Variety_id"))
    {
        flag = true;
    }
    else
    {
        flag = false;
    }
    return flag;
}


/*--------------------------------------Activity Type Page-------------------------------------------*/
function ValidateActivityType()
{
    $("#ActivityTypeForm").validate({
        rules: {
            Activity_name : {
                required : true,
                alphaNumeric : true,
            },
        },
        messages: {
            Activity_name : {
                required : "Please Enter Activity Name",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownActivityType()
{
    return true;
}


/*--------------------------------------Crop Page-------------------------------------------*/
function ValidateCrop()
{
    $("#CropForm").validate({
        rules: {
            Crop_name : {
                required : true,
                alphaNumeric : true,
            },
        },
        messages: {
            Crop_name : {
                required : "Please Enter Crop Name",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownCrop()
{
    return true;
}


/*--------------------------------------Crop Planted On Crop Page-------------------------------------------*/
function ValidateCropPlantedOnPlot()
{
    $("#CropPlantedOnPlotForm").validate({
        rules: {
            Planting_date : {
                required : true,
                DateVal : true,
            },
            No_seed_generated : {
                required : true,
            }
        },
        messages: {
            Planting_date : {
                required : "Please Enter the Planting Date",
                DateVal : "Planting Date can not be greater than today's date!",
            },
            No_seed_generated : {
                required : "Please Enter Number of Seeds Generated",
            }
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownCropPlantedOnPlot()
{
    if(dropdown("Plot_id"))
    {
        flag = true;
    }
    if(dropdown("Tray_id"))
    {
        flag = true;
    }
    else
    {
        flag = false;
    }
    return flag;
}


/*--------------------------------------Crop Variety Page-------------------------------------------*/
function ValidateCropVariety()
{
    $("#CropVarietyForm").validate({
        rules : {
            Variety_name : {
                required : true,
                alphaNumeric : true,
            }
        },
        messages : {
            Variety_name : {
                required : "Please Enter Variety Name",
                alphaNumeric : "Special Characters are Not allowed",
            }
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownCropVariety()
{

    if(dropdown("Crop_id"))
    {
        flag = true;
    }
    else
    {
        flag = false;
    }
    return flag;
}


/*--------------------------------------Farm Page-------------------------------------------*/
function ValidateFarm()
{
    $("#FarmForm").validate({
        rules : {
            Farm_name : {
                required : true,
                alphaNumeric : true,
            },
        },
        messages : {
            Farm_name : {
                required : "Please Enter Farm Name",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownFarm()
{
    if(dropdown("Employee_id"))
    {
        flag = true;
    }
    else
    {
        flag = false;
    }
    return flag;
}

/*--------------------------------------Flask Page-------------------------------------------*/
function ValidateFlask()
{
    $("#FlaskForm").validate({
        rules: {
            Create_date : {
                required : true,
            },
            No_flask : {
                required : true,
            },
        },
        messages: {
            Create_date : {
                required : "Please Enter Create Date",
            },
            No_flask : {
                required : "Please Enter Numer of Flask",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownFlask()
{
    if(dropdown("Employee_id"))
    {
        flag = true;
    }
    if(dropdown("Variety_id"))
    {
        flag = true;
    }
    else
    {
        flag = false;
    }
    return flag;
}


/*--------------------------------------Flask Stage Mapping Page-------------------------------------------*/
function ValidateFlaskStageMapping()
{
    $("#FlaskStageMappingForm").validate({
        rules: {
            Entering_date : {
                required : true,
            },
        },
        messages: {
            Entering_date : {
                required : "Please Enter Entering Date",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownFlaskStageMapping()
{
    if(dropdown("Flask_id"))
    {
        flag = true;
    }
    if(dropdown("Stage_id_no"))
    {
        flag = true;
    }
    else
    {
        flag = false;
    }
    return flag;
}


/*--------------------------------------Irrigation Page-------------------------------------------*/
function ValidateIrrigation()
{
    $("#IrrigationForm").validate({
        rules: {
            Type : {
                required : true,
                alphaNumeric : true,
            },
        },
        messages: {
            Type : {
                required : "Please Enter Irrigation Type",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownIrrigation()
{
    return true;
}


/*--------------------------------------Plot Page-------------------------------------------*/
function ValidatePlot()
{
    $("#PlotForm").validate({
        rules: {
            Plot_no : {
                required : true,
                alphaNumeric : true,
            },
            Area : {
                required : true,
                AreaAcreValidate : true,
                number : true,
            },

        },
        messages: {
            Plot_no : {
                required : "Please Enter Plot Number",
            },
            Area : {
                required : "Please Enter Area",
                number : "Please Enter only Numbers"
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownPlot()
{
    if(dropdown("Farm_id"))
    {
        flag = true;
    }
    if(dropdown("Soil_id"))
    {
        flag = true;
    }
    if(dropdown("Irrigation_id"))
    {
        flag = true;
    }
    else
    {
        flag = false;
    }
    return flag;
}


/*--------------------------------------Seed Given To Farmer Page-------------------------------------------*/
function ValidateSeedGivenToFarmer()
{
    $("#SeedGivenToFarmerForm").validate({
        rules: {

        },
        messages: {

        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownSeedGivenToFarmer()
{
    // else
    // {
    //     flag = false;
    // }
    // return flag;
}


/*--------------------------------------Seed Planted On GreenHouse Page-------------------------------------------*/
function ValidateSeedPlantedOnGreenHouse()
{
    $("#SeedPlantedOnGreenHouseForm").validate({
        rules: {

        },
        messages: {

        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownSeedPlantedOnGreenHouse()
{
    // else
    // {
    //     flag = false;
    // }
    // return flag;
}


/*--------------------------------------Stage Page-------------------------------------------*/
function ValidateStage()
{
    $("#StageForm").validate({
        rules: {
            Stage_name : {
                required : true,
                alphaNumeric : true,
            },
            Stage_process_defination : {
                required : true,
            },
            Stage_time : {
                required : true,
            },
        },
        messages: {
            Stage_name : {
                required : "Please Enter Stage Name",
            },
            Stage_process_defination : {
                required : "Please Enter Stage Process Defination",
            },
            Stage_time : {
                required : "Please Enter Stage Time",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownStage()
{
    return true;
}


/*--------------------------------------Soil Page-------------------------------------------*/
function ValidateSoil()
{
    $("#SoilForm").validate({
        rules: {
            Soil_type : {
                required : true,
                alphaNumeric : true,
            }
        },
        messages: {
            Soil_type : {
                required : "Please Enter Soil Type",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownSoil()
{
    return true;
}


/*--------------------------------------Tray Page-------------------------------------------*/
function ValidateTray()
{
    $("#TrayForm").validate({
        rules: {
            Tray_no : {
                required : true,
            },
            No_of_plantlets : {
                required : true,
            },
        },
        messages: {
            Tray_no : {
                required : "Please Enter Tray Number",
            },
            No_of_plantlets : {
                required : "Please Enter Numbe of Plantlets",
            },
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

function DropDownTray()
{
    if(dropdown("Employee_id"))
    {
        flag = true;
    }
    if(dropdown("Variety_id"))
    {
        flag = true;
    }
    else
    {
        flag = false;
    }
    return flag;
}


/*--------------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------------*/
/*------------------------------------- Customise Functions ----------------------------------------------*/

//DropDown Function
function dropdown(elementName)
{
    var checkDropdown = $("[name='"+elementName+"']").val();
    if(checkDropdown === "")
    {
        $("#error"+elementName+"").text("Please Choose the Option");
        return false;
    }
    else
    {
        $("#error"+elementName+"").text("");
        return true;
    }
}

//Date can not be greater than today's date!
function DateValidation(value,element)
{
    return (Date.parse(new Date()) >= (Date.parse(value)));
}
$.validator.addMethod("DateVal", DateValidation,"Date can not be greater than today's date!");

//Text only Function
function textOnly(value, element)
{
    $result= /^[a-zA-Z ]+$/.test(value);
    return $result;
}
$.validator.addMethod("textOnly", textOnly,"Please enter only alpha characters(a-z or A-Z).");

//AlphaNumeric Function
function alphaNumeric(value, element)
{
    $result= /^[a-zA-Z0-9 ]+$/.test(value);
    return $result;
}
$.validator.addMethod("alphaNumeric", alphaNumeric,"Please enter only alphaNumeric characters.");

function ActivityDateStart(value,element)
{
    return (Date.parse(value)) >= (Date.parse($("[name='Start_date']").val()));
}
$.validator.addMethod("ActivityDateStart", ActivityDateStart,"End Date cannot be less than Start Date");

function AreaAcreValidate(value,element)
{
    var $floor = Math.floor(value);
    var $float = value - $floor;
    return ($float<0.4);
}
$.validator.addMethod("AreaAcreValidate", AreaAcreValidate,"Enter Valid Area in Acres");
