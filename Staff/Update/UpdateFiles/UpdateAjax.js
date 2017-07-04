$("document").ready(function(){

    var pageFlag = $("[name='pageFlag']").val();

    switch(pageFlag)
    {
        case "Activity" : UpdateDropdownActivity(); break;
        case "ActivityType" : UpdateDropdownActivityType(); break;
        case "Crop" : UpdateDropdownCrop(); break;
        case "CropPlantedOnPlot" : UpdateDropdownCropPlantedOnPlot(); break;
        case "CropVariety" : UpdateDropdownCropVariety(); break;
        case "Farm" : UpdateDropdownFarm(); break;
        case "Flask" : UpdateDropdownFlask(); break;
        case "FlaskStageMapping" : UpdateDropdownFlaskStageMapping(); break;
        case "Irrigation" : UpdateDropdownIrrigation(); break;
        case "Plot" : UpdateDropdownPlot(); break;
        case "SeedGivenToFarmer" : UpdateDropdownSeedGivenToFarmer(); break;
        case "SeedPlantedOnGreenHouse" : UpdateDropdownSeedPlantedOnGreenHouse(); break;
        case "Stage" : UpdateDropdownStage(); break;
        case "Soil" : UpdateDropdownSoil(); break;
        case "Tray" : UpdateDropdownTray(); break;
    }

});

function UpdateDropdownActivity()
{
    $(".ActivityPanel").hide();
    $("#ActivityDropdown").change(function(){

        $(".Margin").show();
        var id = $("#ActivityDropdown").val();

        if(id === "")
        {
            $(".ActivityPanel").hide();
            $("#errorActivity_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".ActivityPanel").show();
            $(".Margin").hide();
            $("#errorActivity_id").html("");
            var data = {
                action : "RetrieveActivityDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {

                    $("#ActivityTypeDropdown").val(data['Activity_type_id']);
                    $("[name = 'Activity_amount']").val(data['Activity_amount']);
                    $("[name = 'Start_date']").val(data['Start_date']);
                    $("[name = 'Expected_end_date']").val(data['Expected_end_date']);
                    $("[name = 'Actual_end_date']").val(data['Actual_end_date']);
                    $("[name = 'Remark']").val(data['Remark']);
                    $("[name = 'Creation_date']").val(data['Creation_date']);
                    $("[name = 'Farm_id']").val(data['Farm_id']);
                    $("[name = 'Crop_id']").val(data['Crop_id']);
                    $("[name = 'Plot_id']").val(data['Plot_id']);
                    $("[name = 'Area']").val(data['Area']);
                    $("[name = 'Crop_variety_id']").val(data['Crop_variety_id']);
                    $("[name = 'Employee_id']").val(data['Employee_id']);

                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivity()

function UpdateDropdownActivityType()
{
    $(".ActivityTypePanel").hide();
    $("#ActivityTypeDropdown").change(function(){

        $(".Margin").show();
        var id = $("#ActivityTypeDropdown").val();

        if(id === "")
        {
            $(".ActivityTypePanel").hide();
            $("#errorActivity_type_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".ActivityTypePanel").show();
            $(".Margin").hide();
            $("#errorActivity_type_id").html("");
            var data = {
                action : "RetrieveActivityTypeDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $("[name = 'id']").val(id);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {

                    $("[name = 'Activity_name']").val(data['Activity_name']);

                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivityType()

function UpdateDropdownCrop()
{
    $(".CropPanel").hide();
    $("#CropDropdown").change(function(){

        $(".Margin").show();
        var id = $("#CropDropdown").val();

        if(id === "")
        {
            $(".CropPanel").hide();
            $("#errorActivity_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".CropPanel").show();
            $(".Margin").hide();
            $("#errorCrop_id").html("");
            var data = {
                action : "RetrieveCropDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $("[name = 'id']").val(id);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {
                    $("[name = 'Crop_name']").val(data['Crop_name']);
                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivity()

function UpdateDropdownFarm()
{
    $(".FarmPanel").hide();
    $("#FarmDropdown").change(function(){

        $(".Margin").show();
        var id = $("#FarmDropdown").val();

        if(id === "")
        {
            $(".FarmPanel").hide();
            $("#errorActivity_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".FarmPanel").show();
            $(".Margin").hide();
            $("#errorFarm_id").html("");
            var data = {
                action : "RetrieveFarmDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $("[name = 'id']").val(id);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {
                    $("[name = 'Farm_name']").val(data['Farm_name']);
                    $("[name = 'Employee_id']").val(data['Incharge']);
                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivity()

function UpdateDropdownIrrigation()
{
    $(".IrrigationPanel").hide();
    $("#IrrigationDropdown").change(function(){

        $(".Margin").show();
        var id = $("#IrrigationDropdown").val();

        if(id === "")
        {
            $(".IrrigationPanel").hide();
            $("#errorActivity_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".IrrigationPanel").show();
            $(".Margin").hide();
            $("#errorIrrigation_id").html("");
            var data = {
                action : "RetrieveIrrigationDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $("[name = 'id']").val(id);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {
                    $("[name = 'Type']").val(data['Type']);

                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivity()

function UpdateDropdownSoil()
{
    $(".SoilPanel").hide();
    $("#SoilDropdown").change(function(){

        $(".Margin").show();
        var id = $("#SoilDropdown").val();

        if(id === "")
        {
            $(".SoilPanel").hide();
            $("#errorSoil_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".SoilPanel").show();
            $(".Margin").hide();
            $("#errorSoil_id").html("");
            var data = {
                action : "RetrieveSoilDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $("[name = 'id']").val(id);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {
                    $("[name = 'Soil_type']").val(data['Soil_type']);

                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivity()

function UpdateDropdownStage()
{
    $(".StagePanel").hide();
    $("#StageDropdown").change(function(){

        $(".Margin").show();
        var id = $("#StageDropdown").val();

        if(id === "")
        {
            $(".StagePanel").hide();
            $("#errorStage_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".StagePanel").show();
            $(".Margin").hide();
            $("#errorStage_id").html("");
            var data = {
                action : "RetrieveStageDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $("[name = 'id']").val(id);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {
                    $("[name = 'Stage_name']").val(data['Stage_name']);
                    $("[name = 'Stage_process_defination']").val(data['Stage_process_defination']);
                    $("[name = 'Stage_time']").val(data['Stage_time']);

                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivity()

function UpdateDropdownTray()
{
    $(".TrayPanel").hide();
    $("#TrayDropdown").change(function(){

        $(".Margin").show();
        var id = $("#TrayDropdown").val();

        if(id === "")
        {
            $(".TrayPanel").hide();
            $("#errorTray_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".TrayPanel").show();
            $(".Margin").hide();
            $("#errorTray_id").html("");
            var data = {
                action : "RetrieveTrayDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $("[name = 'id']").val(id);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {
                    $("[name = 'Tray_no']").val(data['Tray_no']);
                    $("[name = 'Employee_id']").val(data['Incharge_id']);
                    $("[name = 'Variety_id']").val(data['Species_id']);
                    $("[name = 'No_of_plantlets']").val(data['No_of_plantlets']);

                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivity()

function UpdateDropdownFlask()
{
    $(".FlaskPanel").hide();
    $("#FlaskDropdown").change(function(){

        $(".Margin").show();
        var id = $("#FlaskDropdown").val();

        if(id === "")
        {
            $(".FlaskPanel").hide();
            $("#errorFlask_id").html("Please Choose Your Option");
        }//if Loop
        else
        {
            $(".FlaskPanel").show();
            $(".Margin").hide();
            $("#errorFlask_id").html("");
            var data = {
                action : "RetrieveFlaskDetails", //Defining parameters for switch case in DropdownUpdate.php
                id : id,
            };
            data = $.param(data);
            $("[name = 'id']").val(id);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "DropDownUpdate.php",
                data : data,
                success : function(data) {
                    $("[name = 'Create_date']").val(data['Create_date']);
                    $("[name = 'End_date']").val(data['End_date']);
                    $("[name = 'Employee_id']").val(data['Incharge_id']);
                    $("[name = 'Variety_id']").val(data['Specie_type']);
                    $("[name = 'No_flask']").val(data['No_flask']);

                }
            });//Ajax Function

        }// else Loop
    });// on change Function
}// End of function UdpateDropdownActivity()
