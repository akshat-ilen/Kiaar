/*-------------------------Create Account---------------------*/
function CreateAccountValidate()
{
    $("#CreateAccountForm").validate({
        rules: {
             Employee_id:
             {
               required: true,
               number:true
             },
             Fname:
             {
               required:true,
               textOnly:true
             },
             Lname:
             {
               required:true,
               textOnly:true
             },
             Email:
             {
               required:true,
               email:true
             }
        },

        messages: {
            Employee_id: {
               required: "Empoyee ID is required",
               number: "Enter digits only"

             },
             Fname: {
               required: "First name is required",
               textOnly: "Enter alphabets only"
             },
             Lname: {
               required: "Last name is required",
               textOnly: "Enter alphabets only"
             },
             Email: {
               required: "Email is required",
               email: "Enter Email ID in valid format i.e. valid@valid.com"
             }
        },

        errorElement : "div",
        errorClass : "invalid errorMessage",
        onsubmit: false,
    });
}

/*-------------------------Edit Account---------------------*/
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
