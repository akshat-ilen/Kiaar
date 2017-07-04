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
    <nav class=" light-blue accent-4">
    	<div class="container-fluid">
        	<div class="nav-wrapper">
         		<a href="<?php host();?>Admin/AdminMaster.php" class="brand-logo"><strong>KIAAR</strong></a>
    	     	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                <!-- Upper Navbar -->
                <ul class="right hide-on-med-and-down">
            		<li><a href="<?php host();?>Admin/AdminMaster.php">Home</a></li>
            		<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Employee Account<i class="material-icons right">arrow_drop_down</i></a></li>
                        <ul id='dropdown1' class='dropdown-content'>
                			<li><a href="<?php host();?>Admin/CreateAccount.php">Create Account</a></li>
                			<li><a href="<?php host();?>Admin/EditAccount.php">Edit Existing Account</a></li>
    	  		        </ul>
                    <li><a href="<?php host();?>Admin/ReportGeneration/ReportGeneration.php">Report generation</a></li>
          		 	<li><a href="<?php host();?>Admin/ChangePassword.php">Change Password</a></li>
                    <li><a href="<?php host();?>index.php">Sign Out</a></li>
                    <li><a href="<?php host();?>Admin/AdminFiles/Help.php"><i class="material-icons">help_outline</i></a></li>
          		</ul>

                <!-- Side NavBar -->
                <ul class="side-nav" id="mobile-demo">
            		<li><a href="<?php host();?>Admin/AdminMaster.php">Home</a></li>
                    <li><a class="dropdown-button" href="#" data-activates="dropdown2">Employee Account<i class="material-icons right">arrow_drop_down</i></a></li>
            			<ul id='dropdown2' class='dropdown-content'>
                            <li><a href="<?php host();?>Admin/CreateAccount.php">Create Account</a></li>
                			<li><a href="<?php host();?>Admin/EditAccount.php">Edit Existing Account</a></li>
    	  				</ul>
                    <li><a href="<?php host();?>Admin/ReportGeneration/ReportGeneration.php">Report generation</a></li>
          		 	<li><a href="<?php host();?>Admin/ChangePassword.php">Change Password</a></li>
                    <li><a href="<?php host();?>Admin/AdminFiles/Help.php">Help ?</a></li>
            		<li><a href="<?php host();?>Files/LogOut.php">Sign Out</a></li>
          		</ul>
        	</div>
        </div>
    </nav>
</header>
