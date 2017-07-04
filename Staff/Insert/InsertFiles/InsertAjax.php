<?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        switch($pageFlag)
        {
            case "Activity" : InsertActivity(); break;
            case "ActivityType" : InsertActivityType(); break;
            case "Crop" : InsertCrop(); break;
            case "CropPlantedOnPlot" : InsertCropPlantedOnPlot(); break;
            case "CropVariety" : InsertCropVariety(); break;
            case "Farm" : InsertFarm(); break;
            case "Flask" : InsertFlask(); break;
            case "FlaskStageMapping" : InsertFlaskStageMapping(); break;
            case "Irrigation" : InsertIrrigation(); break;
            case "Plot" : InsertPlot(); break;
            case "SeedGivenToFarmer" : InsertSeedGivenToFarmer(); break;
            case "SeedPlantedOnGreenHouse" : InsertSeedPlantedOnGreenHouse(); break;
            case "Stage" : InsertStage(); break;
            case "Soil" : InsertSoil(); break;
            case "Tray" : InsertTray(); break;
        }
    }


    /*------------------------ Activity ------------------------------------ */
    function InsertActivity()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Activity_type_id = $_POST["Activity_type_id"];
        $Activity_amount = $_POST["Activity_amount"];
        $Start_date = $_POST["Start_date"];
        $Expected_end_date = $_POST["Expected_end_date"];
        $Remark = $_POST["Remark"];
        $Creation_date = $_POST["Creation_date"];
        $Plot_id = $_POST["Plot_id"];
        $Area = $_POST["Area"];
        $Variety_id = $_POST["Variety_id"];

        $column = "Activity_type_id,Activity_amount,Start_date,Expected_end_date,Remark,Creation_date,Plot_id,Area,Crop_variety_id";
        $value = "$Activity_type_id,$Activity_amount,'$Start_date','$Expected_end_date','$Remark','$Creation_date',$Plot_id,$Area,$Variety_id";

        $sql = "INSERT INTO activity(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("Activity");
        }
        else
        {
            Error();
        }

        $conn->close();


    }


    /*------------------------ ActivityType ------------------------------------ */
    function InsertActivityType()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Activity_name = $_POST["Activity_name"];

        $column ="Activity_name";
        $value ="'$Activity_name'";

        $sql = "INSERT INTO activity_type(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("Activity ");
        }
        else
        {
            Error();
        }

        $conn->close();


    }


    /*------------------------ Crop ------------------------------------ */
    function InsertCrop()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Crop_name = $_POST["Crop_name"];

        $column ="Crop_name";
        $value ="'$Crop_name'";

        $sql = "INSERT INTO crop(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("Crop Type");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ CropPlantedOnPlot ------------------------------------ */
    function InsertCropPlantedOnPlot()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Plot_id = $_POST["Plot_id"];
        $Planting_date = $_POST["Planting_date"];
        $Tray_id = $_POST["Tray_id"];
        $No_seed_generated = $_POST["No_seed_generated"];
        $Heating_date = $_POST["Heating_date"];

        $column ="Plot_id,Planting_date,Tray_id,No_seed_generated,Heating_date";
        $value ="$Plot_id,'$Planting_date',$Tray_id,$No_seed_generated,'$Heating_date'";

        $sql = "INSERT INTO crop_planted_plot(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("Crop Plot Mapping");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ CropVariety ------------------------------------ */
    function InsertCropVariety()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Crop_id = $_POST["Crop_id"];
        $Variety_name = $_POST["Variety_name"];

        $column ="Variety_name,Crop_id";
        $value ="'$Variety_name',$Crop_id";

        $sql = "INSERT INTO crop_variety(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("Crop Variety");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ Farm ------------------------------------ */
    function InsertFarm()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Farm_name = $_POST["Farm_name"];
        $Employee_id = $_POST["Employee_id"];

        $column ="Farm_name,Incharge";
        $value ="'$Farm_name','$Employee_id'";

        $sql = "INSERT INTO farm(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("New Farm ".strtoupper($Farm_name)."");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ Flask ------------------------------------ */
    function InsertFlask()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Create_date = $_POST["Create_date"];
        $Employee_id = $_POST["Employee_id"];
        $Variety_id = $_POST["Variety_id"];
        $No_flask = $_POST["No_flask"];

        $column ="Create_date,Incharge_id,Specie_type,No_flask";
        $value ="'$Create_date',$Employee_id,$Variety_id,$No_flask";

        $sql = "INSERT INTO flask(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("New Flask");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ FlaskStageMapping ------------------------------------ */
    function InsertFlaskStageMapping()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Flask_id = $_POST["Flask_id"];
        $Stage_id_no = $_POST["Stage_id_no"];
        $Entering_date = $_POST["Entering_date"];

        $column ="Flask_id,Stage_id,Entering_date";
        $value ="$Flask_id,$Stage_id_no,'$Entering_date'";

        $sql = "INSERT INTO flask_stage_mapping(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("Flask To Stage Mapping");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ Irrigation ------------------------------------ */
    function InsertIrrigation()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Type = $_POST["Type"];

        $column ="Type";
        $value ="'$Type'";

        $sql = "INSERT INTO irrigation(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("Irrigation Type");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ Plot ------------------------------------ */
    function InsertPlot()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Plot_no = $_POST["Plot_no"];
        $Farm_id = $_POST["Farm_id"];
        $Area = $_POST["Area"];
        $Soil_id = $_POST["Soil_id"];
        $Irrigation_id = $_POST["Irrigation_id"];

        //Area Calculation in acres
        $floatArea = $Area - floor($Area);
        $Area = (floor($Area)*40) + ($floatArea*100);

        $column ="Plot_no,Farm_id,Area,Soil_id,Irrigation_id";
        $value ="'$Plot_no',$Farm_id,$Area,$Soil_id,$Irrigation_id";

        $sql = "INSERT INTO plot(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("New Plot");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ SeedGivenToFarmer ------------------------------------ */
    function InsertSeedGivenToFarmer()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $column ="";
        $value ="";

        $sql = "INSERT INTO (".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ SeedPlantedOnGreenHouse ------------------------------------ */
    function InsertSeedPlantedOnGreenHouse()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $column ="";
        $value ="";

        $sql = "INSERT INTO (".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ Stage ------------------------------------ */
    function InsertStage()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Stage_name = $_POST["Stage_name"];
        $Stage_process_defination = $_POST["Stage_process_defination"];
        $Stage_time = $_POST["Stage_time"];

        $column ="Stage_name,Stage_process_defination,Stage_time";
        $value ="'$Stage_name','$Stage_process_defination',$Stage_time";

        $sql = "INSERT INTO stage(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("New Stage");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ Soil ------------------------------------ */
    function InsertSoil()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Soil_type = $_POST["Soil_type"];

        $column ="Soil_type";
        $value ="'$Soil_type'";

        $sql = "INSERT INTO soil(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("Soil");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*------------------------ Tray ------------------------------------ */
    function InsertTray()
    {
        //Connecting the Database
        Global $servername,$username,$password,$dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $Tray_no = $_POST["Tray_no"];
        $Employee_id = $_POST["Employee_id"];
        $Variety_id = $_POST["Variety_id"];
        $No_of_plantlets = $_POST["No_of_plantlets"];

        $column ="Tray_no,Incharge_id,Species_id,No_of_plantlets";
        $value ="$Tray_no,$Employee_id,$Variety_id,$No_of_plantlets";

        $sql = "INSERT INTO tray(".$column.") VALUES(".$value.")";

        if ($conn->query($sql) === TRUE)
        {
            SuccessAlert("New Tray");
        }
        else
        {
            Error();
        }

        $conn->close();
    }


    /*-----------------------------------------------------------------------------------------------------*/
    /*-----------------------------------------------------------------------------------------------------*/
    /*-----------------------------------------------------------------------------------------------------*/
    /*-----------------------------------------------------------------------------------------------------*/
    /*------------------------ Customise Functions ------------------------------------ */
    function SuccessAlert($message)
    {
        echo '<script>$("document").ready(function(){
            alert("'.$message.' Inserted Successfully");
            })</script>';
    }


    function Error()
    {
        echo '<script>$("document").ready(function(){
            alert(" There is Some Error");
            })</script>';
    }

?>
