/*----------------------------------------Create Account-------------------------------------*/
function CreateAccount()
{
    $("#CreateAccountForm").submit(function(e){

        CreateAccountValidate();//Checking The Validation

        var formCheck = $("#CreateAccountForm").valid();

        if(formCheck)
        {
            e.preventDefault();
            var data = {
                action : "CreateAccount",
            };
            data = $(this).serialize() + "&" +$.param(data);
            $.ajax({
                    type : "POST",
                    dataType : "json",
                    url : "AdminAjax.php",
                    data : data,
                    success : function(data) {

                        if(data['result']==="true")
                        {
                            alert("Account Is Created Succesfully");
                            location.href = "CreateAccount.php";
                        }
                        else
                        {
                            alert("This Employee ID is already in use. Please Choose another one");
                            $("#Employee_id").addClass("invalid");
                            $("[name='Fname']").val(data["Fname"]);
                            $("[name='Mname']").val(data["Mname"]);
                            $("[name='Email']").val(data["Email"]);
                            e.preventDefault();
                            return false;
                        }
                    }
                }); // Ajax function
        }//if loop
        else {

            return false;
        }//else loop
    });//Create Account Submit Function
}

/*----------------------------------------Edit Account-------------------------------------*/
function EditAccount()
{
    $(".EditAccountForm").hide();

    $("#EmployeeDropdown").change(function(){

        $(".Margin").show();
        var id = $("#EmployeeDropdown").val();
        if(id == "")
        {
            $(".EditAccountForm").hide();
            $("#errorEmployee_id").html("Please Choose Your Option");
        }//if Loop
        else
        {

            $("#errorEmployee_id").html("");
            var data = {
                action : "RetrieveEmployeeDetails", //Defining parameters for swithc case in UpdateNewPage.php
                id : id,
                type : "",
            };
            data =$.param(data);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "AdminAjax.php",
                data : data,
                success : function(data) {

                    $("[name='Fname']").val(data["Fname"]);
                    $("[name='Mname']").val(data["Mname"]);
                    $("[name='Lname']").val(data["Lname"]);
                    $("[name='Date_of_birth']").val(data["Date_of_birth"]);
                    $("[name='Date_of_joining']").val(data["Date_of_joining"]);
                    $("[name='Address']").val(unescape(data["Address"]));
                    $("[name='Contact_no']").val(data["Contact_no"]);
                    $("[name='Email']").val(data["Email"]);
                    $("[name='hideEmployeeId']").val(data["id"]);

                    var G = data["Gender"];
                    if(G =="m")
                    {
                        $("#male").prop("checked",true);
                    }
                    else
                    {
                        $("#female").prop("checked",true);
                    }
                    $(".EditAccountForm").show();
                    $(".Margin").hide();
                }
            });//Ajax Function
        }
    });//OnChange function

    $("#EmployeeForm").submit(function(){

        EditAccountValidate();

        var formCheck = $("#EmployeeForm").valid();
        if(formCheck)
        {

            var id = $("[name='hideEmployeeId']").val();
            var data = {
                action : "UpdateEmployeeDetails",
                id : id
            };
            var address = $("[name='Address']").val();
            $("[name='Address']").val(escape(address));
            data = $(this).serialize() + "&" +$.param(data);
            $.ajax({
                    type : "POST",
                    dataType : "json",
                    url : "AdminAjax.php",
                    data : data,
                    success : function(data) {

                        alert("Employee Details Updated Successfully");
                        location.href = "EditAccount.php";
                    }
                });//Ajax Function
        }
        else
        {
            return false;
        }
    });//Edit Account Submit Function

}//Edit Account Function




/*----------------------------------Customise Validation Function----------------------------*/
function textOnly(value, element)
{
    $result= /^[a-zA-Z]+$/.test(value);
    return $result;
}
$.validator.addMethod("textOnly", textOnly,"Please enter only alpha characters(a-z or A-Z).");

function DateValidation(value,element)
{
    return (Date.parse(new Date()) >= (Date.parse(value)));
}
$.validator.addMethod("DateVal", DateValidation,"Date can not be greater than today's date!");

function AgeValidation(value,element)
{
    var date = (Date.parse(new Date()) - (Date.parse(value)));
    return date > 567973800000;
}
$.validator.addMethod("AgeVal", AgeValidation,"You Should be greater than 18 years");
