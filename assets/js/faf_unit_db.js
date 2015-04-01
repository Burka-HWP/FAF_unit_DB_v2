
var $globals = { unit1_race:1, unit1_tier:1, unit2_race:1, unit2_tier:1, unit1_type:'unit', unit2_type:'unit' };
var $races = { aeon:1, cybran:2, uef:3, seraphim:4 }; 
var $chosens = { unit1:false, unit2:false };


function changeRace($unit, $race) {
    clearRace($unit);        
    document.getElementById($unit + "_" + $race).setAttribute("class", "compare-selected");   
    $globals[$unit + "_race"] = $races[$race];             
    showStep2($unit);
    clearSelect($unit);
    populateSelect($unit);
    changeBorder($unit, $race);
}
    
function changeTier($unit, $tier) {
    clearTier($unit);        
    document.getElementById($unit + "_tier" + $tier).setAttribute("class", "compare-selected");
    $globals[$unit + "_tier"] = $tier;
    showStep3($unit);
    clearSelect($unit);
    populateSelect($unit);
}

function changeType($unit, $type) {
    clearType($unit);
    document.getElementById($unit + "_type_" + $type).setAttribute("class", "compare-selected");
    $globals[$unit + "_type"] = $type;
    clearSelect($unit);
    showStep4($unit);
    populateSelect($unit);        
}

function changeBorder($unit, $race) {       
    if($race == 'aeon') {
        document.getElementById($unit + "_wrapper").setAttribute("style", "background: rgba(10, 157, 47, .30);");
    } else if ($race == 'cybran') {
        document.getElementById($unit + "_wrapper").setAttribute("style", "background: rgba(223, 45, 14, .30);");
    } else if ($race == 'uef') {
        document.getElementById($unit + "_wrapper").setAttribute("style", "background: rgba(45, 120, 178, .30);");
    } else if ($race == 'seraphim') {
        document.getElementById($unit + "_wrapper").setAttribute("style", "background: rgba(241, 194, 64, .30);");
    }

}

function showStep2($unit) {
    document.getElementById($unit + "_step2").setAttribute("style", "visibility: visible;");
}

function showStep3($unit) {
    document.getElementById($unit + "_step3").setAttribute("style", "visibility: visible;");
}

function showStep4($unit) {
    document.getElementById($unit + "_step4").setAttribute("style", "visibility: visible;");
    $chosens[$unit] = true;
}

function showStep5() {
    document.getElementById("step5").setAttribute("style", "visibility: visible;");
}

function test() {
    alert("unit 1 race: " + $globals["unit1_race"]
            + "\nunit 1 tier: " + $globals["unit1_tier"]
            + "\nunit 2 race: " + $globals["unit2_race"]
            + "\nunit 2 tier: " + $globals["unit2_tier"]);
}  

function populateSelect($unit) {
    clearSelect($unit);
    $.ajax({ url: "compare/getOptions/" + $globals[$unit + "_race"] + "/" + $globals[$unit + "_tier"] + "/" + $globals[$unit + "_type"] })
    .done(function( html ) { $( "#" + $unit + "_select" ).append( html ); });

    if($chosens["unit1"] && $chosens["unit2"]) {
        showStep5();
    }        
}

function approveScrn($scrn_id) {
    document.getElementById('s' + $scrn_id).innerHTML = 
        '<img src="/assets/images/admin/progress.gif" style="height: 25px; width: auto; display: block; margin: 5px auto;" />';
    $.ajax({ url: "/admin/approveScrn/" + $scrn_id })
    .done(function( html ) {

        setTimeout(function(){
            document.getElementById('s' + $scrn_id).innerHTML = 
                '<p class="center" style="color: #080; font-weight: bold">Approved</p>';
        }, 1000);
                        
    });
}
function declineScrn($scrn_id) {
    document.getElementById('s' + $scrn_id).innerHTML = 
        '<img src="/assets/images/admin/progress.gif" style="height: 25px; width: auto; display: block; margin: 5px auto;" />';
    $.ajax({ url: "/admin/declineScrn/" + $scrn_id })
    .done(function( html ) {
        setTimeout(function(){
            document.getElementById('s' + $scrn_id).innerHTML = 
                '<p class="center" style="color: #a00; font-weight: bold">Declined</p>';       
        }, 1000);     
    });
}

function approveDesc($desc_id) {
    document.getElementById('d' + $desc_id).innerHTML = 
        '<img src="/assets/images/admin/progress.gif" style="height: 25px; width: auto; display: block; margin: 5px auto;" />';
    $.ajax({ url: "/admin/approveDesc/" + $desc_id })
    .done(function( html ) {
        setTimeout(function(){
            document.getElementById('d' + $desc_id).innerHTML = 
                '<p class="center" style="color: #080; font-weight: bold">Approved</p>';
        }, 1000);   
    });
}
function declineDesc($desc_id) {
    document.getElementById('d' + $desc_id).innerHTML = 
        '<img src="/assets/images/admin/progress.gif" style="height: 25px; width: auto; display: block; margin: 5px auto;" />';
    $.ajax({ url: "/admin/declineDesc/" + $desc_id })
    .done(function( html ) {
        setTimeout(function(){
            document.getElementById('d' + $desc_id).innerHTML = 
                '<p class="center" style="color: #a00; font-weight: bold">Declined</p>';       
        }, 1000);             
    });
}

function clearRace($unit) {
    document.getElementById($unit + "_aeon").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_cybran").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_uef").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_seraphim").setAttribute("class", "compare-unselected");
}

function clearTier($unit) {
    document.getElementById($unit + "_tier1").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_tier2").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_tier3").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_tier4").setAttribute("class", "compare-unselected");
}

function clearType($unit) {
    document.getElementById($unit + "_type_unit").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_type_building").setAttribute("class", "compare-unselected");
}

function clearSelect($unit) {
    document.getElementById($unit + "_select").innerHTML = "";
}

function hideCompareButton() {
    
}

function collapse($category) {
    document.getElementById($category + "-btn").innerHTML = "+";
    var $newfunc = "expand('" + $category + "')";
    //document.getElementById($category + "-btn").setAttribute("onclick", $newfunc);
    document.getElementById($category + "-data").setAttribute("style", "display: none;");
    document.getElementById($category + "-link").setAttribute("onclick", $newfunc);
    
}

function expand($category) {
    document.getElementById($category + "-btn").innerHTML = "-";
    var $newfunc = "collapse('" + $category + "')";
    //document.getElementById($category + "-btn").setAttribute("onclick", $newfunc);    
    document.getElementById($category + "-data").setAttribute("style", " ");
    document.getElementById($category + "-link").setAttribute("onclick", $newfunc);
}



// FEEDBACK BUTTON
function showFeedback(event) {
    var xoff = (window.innerWidth - 600) / 2;
    var yoff = (window.innerHeight - 420) / 2;
    event.preventDefault();
    document.getElementById("feedback-fade").setAttribute("style", "display: visible;");
    document.getElementById("feedback-window").setAttribute("style", "display: visible;" + "top: " + yoff + "px;" + "left: " + xoff + "px;");
return false;
    // document.getElementById("feedback-window").setAttribute("style", "top: " + yoff + "px;");
    // document.getElementById("feedback-window").setAttribute("style", "left: " + xoff + "px;");
}

function hideFeedback(event) {
    event.preventDefault();
    document.getElementById("feedback-fade").setAttribute("style", "display: none;");
    document.getElementById("feedback-window").setAttribute("style", "display: none;");
return false;
}



$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 55
        }, 1000);
        return false;
      }
    }
  });
});



// TEXT AREA LIMITS
$('#correction-ta').keyup(function () {
    var left = 140 - $(this).val().length;
    if (left < 0) {
        left = 0;
    }
    $('#correction-ta-counter').text('Chars: ' + left);
});

$('#feedback-ta').keyup(function () {
    var left = 140 - $(this).val().length;
    if (left < 0) {
        left = 0;
    }
    $('#feedback-ta-counter').text('Chars: ' + left);
});

$('#description-ta').keyup(function () {
    var left = 1000 - $(this).val().length;
    if (left < 0) {
        left = 0;
    }
    $('#description-ta-counter').text('Chars: ' + left);
});

$(document).ready(function() {  
  
    $('textarea[maxlength]').keyup(function(){  
        //get the limit from maxlength attribute  
        var limit = parseInt($(this).attr('maxlength'));  
        //get the current text inside the textarea  
        var text = $(this).val();  
        //count the number of characters in the text  
        var chars = text.length;  
  
        //check if there are more characters then allowed  
        if(chars > limit){  
            //and if there are use substr to get the text before the limit  
            var new_text = text.substr(0, limit);  
  
            //and change the current text with the new text  
            $(this).val(new_text);  
        }  
    });  
  
});

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  arrows: false,
  centerMode: true,
  focusOnSelect: true
});