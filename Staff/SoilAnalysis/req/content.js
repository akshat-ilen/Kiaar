    function lbsFertCalc(form)
    {
        //lbsunit = form.lbsunit.value;
        lbsN = form.lbsN.value;
        lbsP = form.lbsP.value;
        lbsK = form.lbsK.value;
        for(i=0; i <form.match.length; i++){
            if((i==0) && (form.match[i].checked) && (form.fertN.value == "0")){
                document.getElementById("error").innerHTML= "This fertlizer does not contain N!";
                //alert( );
            }
            if((i==1) && (form.match[i].checked) && (form.fertP.value == "0")){
                document.getElementById("error").innerHTML= "This fertlizer does not contain P!";
                //alert();
            }
            if((i==2) && (form.match[i].checked) && (form.fertK.value == "0")){
                document.getElementById("error").innerHTML= "This fertlizer does not contain K!";
                //alert("");
            }
            convert = unitConvert(form);
            if((i==0) && (form.match[i].checked) && (form.fertN.value != "0")){
                npound = lbsN/ form.fertN.value;
                ppound = Math.round(npound * form.fertP.value) - lbsP;
                kpound = Math.round(npound * form.fertK.value) - lbsK;
                if(ppound >0) {
                    defineP = " with a surplus of ";
                    colorP = "<font color=blue>";
                }
                if(ppound <= 0) {
                    defineP = " with a deficit of ";
                    colorP = "<font color=red>";
                    ppound = lbsP - Math.round(npound * form.fertP.value);
                }
                if(kpound > 0) {
                    defineK = " a surplus of ";
                    colorK = "<font color=blue>";
                }
                if(kpound <= 0){
                    defineK = " a deficit of ";
                    colorK = "<font color=red>";
                    kpound = lbsK - Math.round(npound * form.fertK.value);
                }
                if(form.fertunit.selectedIndex != 5) {
                    outdata = "<font size=+0>" + roundNumber(convert * (100 * npound), 2) + " <b>" + form.fertunit.options[form.fertunit.selectedIndex].value + "</b> "
                        + form.fert.options[form.fert.selectedIndex].value + " is needed to match N recommendation rate (" +
                        + lbsN + " <b>" + form.lbsunit.options[form.lbsunit.selectedIndex].value + "</b>) " + defineP
                        + colorP + roundNumber(convert * ppound, 2) + "</font> <b>" + form.fertunit.options[form.fertunit.selectedIndex].value
                        + "</b> P<sub>2</sub>O<sub>5</sub> and" + defineK + colorK + roundNumber(convert * kpound, 2) + "</font> <b>"
                        + form.fertunit.options[form.fertunit.selectedIndex].value + "</b> K<sub>2</sub>O.</font>";

                }
                if(form.fertunit.selectedIndex == 5) {
                    outdata = "<font size=+0>" + roundNumber(convert * (100 * npound), 2) + " <b>" + "lbs/" + form.unseen.value + " sq ft" + "</b> "
                        + form.fert.options[form.fert.selectedIndex].value + " is needed to match N recommendation rate (" +
                        + lbsN + " <b>" + form.lbsunit.options[form.lbsunit.selectedIndex].value + "</b>) " + defineP
                        + colorP + roundNumber(convert * ppound, 2) + "</font> <b>" +  "lbs/" + form.unseen.value + " sq ft"
                        + "</b> P<sub>2</sub>O<sub>5</sub> and" + defineK + colorK + roundNumber(convert * kpound, 2) + "</font> <b>"
                        + "lbs/" + form.unseen.value + " sq ft" + "</b> K<sub>2</sub>O.</font>";

                }
                document.getElementById("text1").innerHTML= outdata;

            }
            if((i==1) && (form.match[i].checked) && (form.fertP.value != "0")){
                ppound = lbsP/ form.fertP.value;
                npound = Math.round(ppound * form.fertN.value) - lbsN;
                kpound = Math.round(ppound * form.fertK.value) - lbsK;
                if(npound >0) {
                    defineN = " with a surplus of ";
                    colorN = "<font color=blue>";
                }
                if(npound <= 0) {
                    defineN = " with a deficit of ";
                    colorN = "<font color=red>";
                    npound = lbsN - Math.round(ppound * form.fertN.value);
                }
                if(kpound > 0) {
                    defineK = " a surplus of ";
                    colorK = "<font color=blue>";
                }
                if(kpound <= 0){
                    defineK = " a deficit of ";
                    colorK = "<font color=red>";
                    kpound = lbsK - Math.round(ppound * form.fertK.value);
                }
                if(form.fertunit.selectedIndex != 5) {
                    outdata = "<font size=+0>" + roundNumber(convert * (100 * ppound), 2) + " <b>" + form.fertunit.options[form.fertunit.selectedIndex].value + "</b> "
                        + form.fert.options[form.fert.selectedIndex].value + " is needed to match P<sub>2</sub>O<sub>5</sub> "
                        + "recommendation rate (" +  lbsP + " <b>" + form.lbsunit.options[form.lbsunit.selectedIndex].value
                        + "</b>) " + defineN + colorN + roundNumber(convert * npound, 2) + "</font> <b>" + form.fertunit.options[form.fertunit.selectedIndex].value
                        + "</b> N and" + defineK + colorK + roundNumber(convert * kpound, 2) + "</font> <b>" + form.fertunit.options[form.fertunit.selectedIndex].value
                        + "</b> K<sub>2</sub>O.</font>";
                }
                if(form.fertunit.selectedIndex == 5) {

                    outdata = "<font size=+0>" + roundNumber(convert * (100 * ppound), 2) + " <b>" + "lbs/" + form.unseen.value + " sq ft" + "</b> "
                        + form.fert.options[form.fert.selectedIndex].value + " is needed to match P<sub>2</sub>O<sub>5</sub> "
                        + "recommendation rate (" +  lbsP + " <b>" + form.lbsunit.options[form.lbsunit.selectedIndex].value
                        + "</b>) " + defineN + colorN + roundNumber(convert * npound, 2)+ "</font> <b>" + "lbs/" + form.unseen.value + "sq ft"
                        + "</b> N and" + defineK + colorK + roundNumber(convert * kpound, 2) + "</font> <b>" + "lbs/" + form.unseen.value + " sq ft"
                        + "</b> K<sub>2</sub>O.</font>";
                }
                document.getElementById("text1").innerHTML= outdata;


            }
            if((i==2) && (form.match[i].checked) && (form.fertK.value != "0")){
                kpound = lbsK/ form.fertK.value;
                npound = Math.round(kpound * form.fertN.value) - lbsN;
                ppound = Math.round(kpound * form.fertP.value) - lbsP;
                if(npound >0) {
                    defineN = " with a surplus of ";
                    colorN = "<font color=blue>";
                }
                if(npound <=0)
                {        defineN = " with a deficit of ";
                    colorN = "<font color=red>";
                    npound = lbsN - Math.round(kpound * form.fertN.value);
                }
                if(ppound > 0) {
                    defineP = " with a surplus of ";
                    colorP = "<font color=blue>";
                }
                if(ppound <= 0)
                {
                    defineP = " a deficit of ";
                    colorP = "<font color=red>";
                    ppound = lbsP - Math.round(kpound * form.fertP.value);
                }
                if(form.fertunit.selectedIndex != 5) {
                    outdata= "<font size=+0>" + roundNumber(convert * (100 * kpound), 2) + " <b>" + form.fertunit.options[form.fertunit.selectedIndex].value + "</b> "
                        + form.fert.options[form.fert.selectedIndex].value + " is needed to match K<sub>2</sub>O recommendation"
                        + " rate (" +  lbsK + " <b>" + form.lbsunit.options[form.lbsunit.selectedIndex].value + "</b>) "
                        + defineN + colorN + roundNumber(convert * npound, 2) + "</font> <b>" + form.fertunit.options[form.fertunit.selectedIndex].value + "</b> N and"
                        + defineP + colorP + roundNumber(convert * ppound, 2) + "</font> <b>" + form.fertunit.options[form.fertunit.selectedIndex].value + "</b> "
                        + "P<sub>2</sub>O<sub>5</sub>.</font>";

                }
                if(form.fertunit.selectedIndex == 5) {
                    outdata = "<font size=+0>" + roundNumber(convert * (100 * kpound), 2) + " <b>" + "lbs/" + form.unseen.value + " sq ft" + "</b> "
                        + form.fert.options[form.fert.selectedIndex].value + " is needed to match K<sub>2</sub>O recommendation"
                        + " rate (" +  lbsK + " <b>" + form.lbsunit.options[form.lbsunit.selectedIndex].value + "</b>) "
                        + defineN + colorN + roundNumber(convert * npound, 2) + "</font> <b>" + "lbs/" + form.unseen.value + " sq ft" + "</b> N and"
                        + defineP + colorP + roundNumber(convert * ppound, 2) + "</font> <b>" + "lbs/" + form.unseen.value + " sq ft" + "</b> "
                        + "P<sub>2</sub>O<sub>5</sub>.</font>";
                }

                document.getElementById("text1").innerHTML= outdata;

            }

        }

    }

function unitConvert(form){
    var convert = 1;
    lbsunitSelected = form.lbsunit.selectedIndex;
    fertunitSelected = form.fertunit.selectedIndex;
    if(lbsunitSelected != fertunitSelected){
        if (lbsunitSelected == 0){
            if(fertunitSelected == 1) convert=1000/43560;
            if(fertunitSelected == 2) convert=100/43560;
            if(fertunitSelected == 3) convert=100/43560 * 16;
            if(fertunitSelected == 4) convert=0.0005;
            if(fertunitSelected == 5) convert=(form.unseen.value)/43560;

        }

    }
    return convert;
}

function roundNumber(num, dec) {
    var result = Math.round(num*Math.pow(100,dec))/Math.pow(100,dec);
    return result;
}

function gradeCalc(form)
{
    fertSelected = form.fert.selectedIndex;
    fertvalue = form.fert.options[fertSelected].value;
    if(fertSelected == 41){
        form.fertN.value  = " ";
        form.fertP.value  = " ";
        form.fertK.value  = " ";
    }
    if(fertvalue != ""){
        if(fertvalue.substring(0,1) == "0")  {
            form.fertN.value  = "0";
        }
        else {
            form.fertN.value = fertvalue.substring(0,2);
        }
        if(fertvalue.substring(3,4) == "0")  {
            form.fertP.value  = "0";
        }
        else {
            form.fertP.value = fertvalue.substring(3,5);
        }
        if(fertvalue.substring(6,7) == "0")  {
            form.fertK.value  = "0";
        }
        else {
            form.fertK.value = fertvalue.substring(6);
        }

    }
}

function anyunit(form)
{
    fertunitSelected = form.fertunit.selectedIndex;
    var doc = document;
    var f = doc.getElementById('fertcal');
    var el = f.elements.unseen;
    if(fertunitSelected == 5){
        // show hidden

        el.style.display = "";
    }
    if(fertunitSelected != 5){
        // hidden again

        el.style.display = "none";
    }
}


function toLbs(kg){
    return kg * 2.20462;
}

   function convertKG(){
       document.getElementById("comvert_simple").value = toKg(document.getElementById("comvert_simple").value);
   }

function convertLBS(){
    document.getElementById("comvert_simple").value = toLbs(document.getElementById("comvert_simple").value);
}

function toKg(lbs){
    return lbs * 0.453592;

}
function calculateSplit(){
    document.getElementById("base").value = document.getElementById("totalN").value;

    document.getElementById("dose1").value = 20 * 100 / 46 + " Kg Urea";
    document.getElementById("dose2").value = 30 * 100 / 46 + " Kg Urea";
    document.getElementById("dose3").value = 40 * 100 / 46 + " Kg Urea";

}