<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php include '../Files/PhpFunctions.php'; ?>
        <?php include '../Files/Links.php'; ?>
        <?php include '../Files/NonSessionPage.php'?>
    </head>
    <body>

        <?php include 'MainFiles/MainHeader.php';?>
        <?php name("Forgot Password ?");?>

        <div class="row">
            <div class="card-panel col l8 m10 s10 offset-l2 offset-m1 offset-s1"><br>
                <div class="row">
                    <form class="col s12">

                        <div class="row">
                            <div class="input-field col s12 l6 m6 ">
                                <input id="Employee_id" name="Employee_id" type="text" class="validate">
                                <label for="Employee_id" data-error="wrong" data-success="right">User ID:</label>
                            </div>

                            <div class="input-field col s12 l6 m6 ">
                                <input id="Email" name="Email" type="email" class="validate">
                                <label for="Email" data-error="wrong" data-success="right">Email ID:</label>
                            </div>
                        </div>

                        <div class="SecurityQuestionPanel">
                            <div class="row">
                                <div class="input-field col s12 l6 m6 offset-l3">
                                    <input id="Qid" name="Qid" type="text" class="validate">
                                    <label for="Qid" data-error="wrong" data-success="right">Security Question:</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 l6 m6 offset-l3">
                                    <input id="Sec_answer" name="Sec_answer" type="text" class="validate">
                                    <label for="Sec_answer" data-error="wrong" data-success="right">Security Answer:</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s10 l4 m4  offset-l4 offset-s3">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button><br><br>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <?php include 'MainFiles/MainFooter.php';?>
    </body>

</html>
