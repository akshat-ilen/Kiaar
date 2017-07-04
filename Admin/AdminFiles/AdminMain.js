$("document").ready(function(){

    var PageFlag = $("[name='PageFlag']").val();

    switch(PageFlag)
    {
        case "CreateAccount" : CreateAccount(); break;
        case "EditAccount" : EditAccount(); break;
        case "EditProfile" : EditProfile(); break;

    }


});//Ready Function
