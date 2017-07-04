// Initialization
$(document).ready(function()
  	{

        $('select').material_select(); // For Dropdown
        $(".button-collapse").sideNav(); // For SideNav
        $('.collapsible').collapsible(
        {
      		accordion : true, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    	});
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button

        });
        $('.slider').slider({
            full_width: true,
            height: 590
        });

    });

    //Disable Refresh Button
    // function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); }
    //
    // $(document).ready(function(){
    // $(document).on("keydown", disableF5);
    // });
    //
    // var ctrlKeyDown = false;
    //
    // $(document).ready(function(){
    //     $(document).on("keydown", keydown);
    //     $(document).on("keyup", keyup);
    // });
    //
    // function keydown(e) {
    //
    //     if ((e.which || e.keyCode) == 116 || ((e.which || e.keyCode) == 82 && ctrlKeyDown)) {
    //         // Pressing F5 or Ctrl+R
    //         e.preventDefault();
    //     } else if ((e.which || e.keyCode) == 17) {
    //         // Pressing  only Ctrl
    //         ctrlKeyDown = true;
    //     }
    // }
    //
    // function keyup(e){
    //     // Key up Ctrl
    //     if ((e.which || e.keyCode) == 17)
    //         ctrlKeyDown = false;
    // }
