function LoginValidate()
{
 $("#LoginForm").validate({
     rules: {
         Employee_id: {
             required: true,
             number:true
         },
         Password: {
             required:true
         }
     },
     messages: {
         Employee_id: {
             required:"UserID is required!",
             number:"Enter digits only"
         },
         Password: {
             required:"Password is required!"
         }
     },
     errorElement : "div",
     errorClass : "invalid errorMessage",
     onsubmit: false,
 });

}
