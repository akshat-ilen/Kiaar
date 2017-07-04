<?php


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        switch($pageFlag)
        {
            case "Activity" : UpdateActivity(); break;
            case "ActivityType" : UpdateActivityType(); break;
            case "Crop" : UpdateCrop(); break;
            case "CropPlantedOnPlot" : UpdateCropPlantedOnPlot(); break;
            case "CropVariety" : UpdateCropVariety(); break;
            case "Farm" : UpdateFarm(); break;
            case "Flask" : UpdateFlask(); break;
            case "FlaskStageMapping" : UpdateFlaskStageMapping(); break;
            case "Irrigation" : UpdateIrrigation(); break;
            case "Plot" : UpdatePlot(); break;
            case "SeedGivenToFarmer" : UpdateSeedGivenToFarmer(); break;
            case "SeedPlantedOnGreenHouse" : UpdateSeedPlantedOnGreenHouse(); break;
            case "Stage" : UpdateStage(); break;
            case "Soil" : UpdateSoil(); break;
            case "Tray" : UpdateTray(); break;
        }
    }

    function UpdateActivity()
    {

    }


    function UpdateActivityType()
    {
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $id = $_POST["id"];
        $Activity_name = $_POST["Activity_name"];

        $sql = "UPDATE activity_type SET Activity_name = '$Activity_name' WHERE Activity_type_id = $id ";

        if ($conn->query($sql) == TRUE)
        {
            SuccessAlert("Activity Type");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    function UpdateCrop()
    {
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $id = $_POST["id"];
        $Crop_name = $_POST["Crop_name"];

        $sql = "UPDATE crop SET Crop_name='$Crop_name' WHERE Crop_id = $id ";

        if ($conn->query($sql) == TRUE)
        {
            SuccessAlert("Crop Type");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    function UpdateCropPlantedOnPlot()
    {

    }


    function UpdateCropVariety()
    {

    }


    function UpdateFarm()
    {
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $id = $_POST["id"];
        $Farm_name = $_POST["Farm_name"];
        $Employee_id = $_POST["Employee_id"];

        $sql = "UPDATE farm SET Farm_name='$Farm_name', Incharge ='$Employee_id' WHERE Farm_id = $id ";

        if ($conn->query($sql) == TRUE)
        {
            SuccessAlert("Farm Type");
        }
        else
        {
            Error();
        }

        $conn->close();

    }


    function UpdateFlask()
    {
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $id = $_POST["id"];
        $Create_date = $_POST["Create_date"];
        $End_date = $_POST["End_date"];
        $Incharge_id = $_POST["Employee_id"];
        $Specie_type = $_POST["Variety_id"];
        $No_flask = $_POST["No_flask"];

        $sql = "UPDATE flask SET Create_date ='$Create_date', End_date='$End_date', Incharge_id = '$Incharge_id' , Specie_type = '$Specie_type' , No_flask ='$No_flask' WHERE Flask_id = '$id' ";

        if ($conn->query($sql) == TRUE)
        {
            SuccessAlert("Flask Type");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    function UpdateFlaskStageMapping()
    {

    }


    function UpdateIrrigation()
    {
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $id = $_POST["id"];
        $Type = $_POST["Type"];

        $sql = "UPDATE irrigation SET Type = '$Type' WHERE Irrigation_id = $id ";

        if ($conn->query($sql) == TRUE)
        {
            SuccessAlert("Irrigation Type");
        }
        else
        {
            Error();
        }

        $conn->close();

    }


    function UpdatePlot()
    {

    }


    function UpdateSeedGivenToFarmer()
    {

    }


    function UpdateSeedPlantedOnGreenHouse()
    {

    }


    function UpdateStage()
    {
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $id = $_POST["id"];
        $Stage_name = $_POST["Stage_name"];
        $Stage_process_defination = $_POST["Stage_process_defination"];
        $Stage_time = $_POST["Stage_time"];

        $sql = "UPDATE stage SET Stage_name = '$Stage_name' , Stage_process_defination = '$Stage_process_defination' , Stage_time = '$Stage_time' WHERE Stage_id_no = '$id' ";

         if ($conn->query($sql) == TRUE)
        {
            SuccessAlert("Stage Type");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    function UpdateSoil()
    {
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $id = $_POST["id"];
        $Soil_type = $_POST["Soil_type"];

        $sql = "UPDATE soil SET Soil_type = '$Soil_type' WHERE Soil_id = $id ";

        if ($conn->query($sql) == TRUE)
        {
            SuccessAlert("Soil Type");
        }
        else
        {
            Error();
        }

        $conn->close();

    }


    function UpdateTray()
    {
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $id = $_POST["id"];
        $Tray_no = $_POST["Tray_no"];
        $Incharge_id = $_POST["Employee_id"];
        $Species_id = $_POST["Variety_id"];
        $No_of_plantlets = $_POST["No_of_plantlets"];

        $sql = "UPDATE tray SET  Tray_no = '$Tray_no' , Species_id = '$Species_id', No_of_plantlets = '$No_of_plantlets', Incharge_id = '$Incharge_id' WHERE Tray_id = '$id' ";

        if ($conn->query($sql) == TRUE)
        {
            SuccessAlert("Tray Type");
        }
        else
        {
            Error();
        }

        $conn->close();
    }





    function SuccessAlert($message)
    {
        echo '<script>$("document").ready(function(){
            alert("'.$message.' Updated Successfully");
            })</script>';
    }


    function Error()
    {
        echo '<script>$("document").ready(function(){
            alert(" There is Some Error");
            })</script>';
    }


?>
