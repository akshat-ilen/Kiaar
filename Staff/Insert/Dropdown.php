<?php

    include '../../Files/PhpFunctions.php';

    $DropDownFlag = $_GET["q"];

    switch($DropDownFlag)
    {
        case "c" : CropVarietyDropdown(); break;
        case "p" : PlotDropDown(); break;
    }

    function CropVarietyDropdown()
    {
        $id = $_GET["c"];

        global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $sql = "SELECT * FROM crop_variety WHERE Crop_id = $id";

        $result = $conn->query($sql);

        while($row = $result->fetch_assoc())
        {
            echo "<option value='".$row['Variety_id']."'>".$row['Variety_name']."</option>";
        }

        $conn->close();

    }

    function PlotDropDown()
    {
        $id = $_GET["c"];

        global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername,$username,$password,$dbname);

        $sql = "SELECT * FROM plot WHERE Farm_id = $id";

        $result = $conn->query($sql);

        while($row = $result->fetch_assoc())
        {
            echo "<option value='".$row['Plot_id']."'>".$row['Plot_no']."</option>";
        }

        $conn->close();

    }

?>
