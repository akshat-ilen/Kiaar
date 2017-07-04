<?php

    include '../../Files/PhpFunctions.php';


    $actionFlag = $_POST["action"];

    switch($actionFlag)
    {
        case "RetrieveActivityDetails" : RetrieveActivityDetails(); break;
        case "RetrieveActivityTypeDetails" : RetrieveActivityTypeDetails(); break;
        case "RetrieveCropDetails" : RetrieveCropDetails(); break;
        case "RetrieveFarmDetails" : RetrieveFarmDetails(); break;
        case "RetrieveSoilDetails" : RetrieveSoilDetails(); break;
        case "RetrieveIrrigationDetails" : RetrieveIrrigationDetails(); break;
        case "RetrieveStageDetails" : RetrieveStageDetails(); break;
        case "RetrieveTrayDetails" : RetrieveTrayDetails(); break;
        case "RetrieveFlaskDetails" : RetrieveFlaskDetails(); break;
    }

    function RetrieveActivityDetails()
    {
        $return = $_POST;

        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM activity WHERE Activity_id = $id";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Activity_type_id']	= $row['Activity_type_id'];
            $return['Activity_amount']	= $row['Activity_amount'];
            $return['Start_date']	= $row['Start_date'];
            $return['Expected_end_date']	= $row['Expected_end_date'];
            $return['Actual_end_date']	= $row['Actual_end_date'];
            $return['Remark']	= $row['Remark'];
            $return['Creation_date'] = $row['Creation_date'];
            $return['Plot_id']	= $row['Plot_id'];
            $return['Area']	= $row['Area'];
            $return['Crop_variety_id']	= $row['Crop_variety_id'];
            $return['Employee_id']= $row['Employee_id'];
        }

        $return["Farm_id"] = farmvalue($return['Plot_id']);
        $return["Crop_id"] = cropvalue($return['Crop_variety_id']);

        $return["json"] = json_encode($return);
        echo json_encode($return);

    }

    function RetrieveActivityTypeDetails()
    {
        $return = $_POST;


        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM activity_type WHERE Activity_type_id = $id";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Activity_name'] = $row['Activity_name'];
        }

        $return["json"] = json_encode($return);
        echo json_encode($return);
    }

    function RetrieveCropDetails()
    {
        $return = $_POST;

        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM crop WHERE Crop_id = $id";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Crop_name'] = $row['Crop_name'];
        }

        $return["json"] = json_encode($return);
        echo json_encode($return);

    }

    function RetrieveFarmDetails()
    {
        $return = $_POST;
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM farm WHERE Farm_id = $id";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Farm_name'] = $row['Farm_name'];
            $return['Incharge'] = $row['Incharge'];
        }

        $return["json"] = json_encode($return);
        echo json_encode($return);

    }

    function RetrieveSoilDetails()
    {
        $return = $_POST;
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM soil WHERE Soil_id = $id";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Soil_type'] = $row['Soil_type'];
        }

        $return["json"] = json_encode($return);
        echo json_encode($return);

    }

    function RetrieveIrrigationDetails()
    {
        $return = $_POST;
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM irrigation WHERE Irrigation_id = $id";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Type'] = $row['Type'];
        }

        $return["json"] = json_encode($return);
        echo json_encode($return);

    }

    function RetrieveStageDetails()
    {
        $return = $_POST;
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM stage WHERE Stage_id_no = $id";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Stage_name'] = $row['Stage_name'];
            $return['Stage_process_defination'] = $row['Stage_process_defination'];
            $return['Stage_time'] = $row['Stage_time'];
        }

        $return["json"] = json_encode($return);
        echo json_encode($return);

    }

    function RetrieveTrayDetails()
    {
        $return = $_POST;
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM tray WHERE Tray_id = '$id'";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Tray_no'] = $row['Tray_no'];
            $return['Incharge_id'] = $row['Incharge_id'];
            $return['Species_id'] = $row['Species_id'];
            $return['No_of_plantlets'] = $row['No_of_plantlets'];

        }

        $return["json"] = json_encode($return);
        echo json_encode($return);

    }

    function RetrieveFlaskDetails()
    {
        $return = $_POST;
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $return["id"];

        $sql = "SELECT * FROM flask WHERE Flask_id = '$id'";

        $result = $conn->query($sql);
        $conn->close();

        while($row = $result->fetch_assoc())
        {
            $return['Create_date'] = $row['Create_date'];
            $return['End_date'] = $row['End_date'];
            $return['Incharge_id'] = $row['Incharge_id'];
            $return['Specie_type'] = $row['Specie_type'];
            $return['No_flask'] = $row['No_flask'];
        }

        $return["json"] = json_encode($return);
        echo json_encode($return);

    }















    function farmvalue($id)
    {
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM plot WHERE Plot_id = $id";
        $result = $conn->query($sql);
        $conn->close();
        $row = $result->fetch_assoc();
        return $row["Farm_id"];
    }

    function cropvalue($id)
    {
        Global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM crop_variety WHERE Variety_id = $id";
        $result = $conn->query($sql);
        $conn->close();
        $row = $result->fetch_assoc();
        return $row["Crop_id"];
    }
?>
