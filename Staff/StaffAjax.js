$("document").ready(function(){

    EditAccount();

});//Ready Function

function EditAccount()
{
            var data = {
                action : "RetrieveEmployeeDetails", //Defining parameters for swithc case in UpdateNewPage.php
            };
            data =$.param(data);
            $.ajax({                //Calling the ajax Function
                type : "POST",
                dataType : "json",
                url : "StaffAjax.php",
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
                }
            });//Ajax function

            $("#EmployeeForm").submit(function(){

                EditAccountValidate();

                var formCheck = $("#EmployeeForm").valid();
                if(formCheck)
                {
                    var data = {
                        action : "UpdateEmployeeDetails",
                    };
                    var address = $("[name='Address']").val();
                    $("[name='Address']").val(escape(address));
                    data = $(this).serialize() + "&" +$.param(data);
                    $.ajax({
                            type : "POST",
                            dataType : "json",
                            url : "StaffAjax.php",
                            data : data,
                            success : function(data) {

                                alert("Your Profile Updated Successfully");
                                location.href = "EditProfile.php";
                            }
                        });//Ajax Function
                }
                else
                {
                    return false;
                }
             });
}

function EditAccountValidate()
{
    $("#EmployeeForm").validate({
        rules : {
            Fname : {
                required : true,
                textOnly : true
            },
            Mname : {
                required : true,
                textOnly : true
            },
            Lname : {
                required : true,
                textOnly : true
            },
            Date_of_birth : {
                required : true,
                DateVal : true,
                AgeVal : true
            },
            Date_of_joining : {
                required : true,
                DateVal : true
            },
            Address : {
                required : true
            },
            Contact_no : {
                required : true
            },
            Email : {
                required : true
            }
        },
        messages : {
            Fname : {
                required : "Please Enter Your First Name",
                textOnly : "Please Enter Only Text"
            },
            Mname : {
                required : "Please Enter Your Second Name",
                textOnly : "Please Enter Only Text"
            },
            Lname : {
                required : "Please Enter Your Last Name",
                textOnly : "Please Enter Only Text"
            },
            Date_of_birth : {
                required : "Please Enter Your Date of Birth",
                DateVal : "Enter Valid Date",
                AgeVal : "You Should be greater than 18 years"
            },
            Date_of_joining : {
                required : "Please Enter Date of Joining ",
                DateVal : "Enter Valid Date"
            },
            Address : {
                required : "Please Enter Your Address"
            },
            Contact_no : {
                required : "Please Enter Your Contact Number"
            },
            Email : {
                required : "Please Enter Your Email ID"
            }
        },
        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

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
