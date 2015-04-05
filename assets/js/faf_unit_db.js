
var $globals = { 
    unit1_race:1, 
    unit1_tier:1,
    unit1_type:1,
    unit1_choice: 'UAA0101',

    unit2_race:1, 
    unit2_tier:1, 
    unit2_type:1,
    unit2_choice: 'UAA0101',

    unit3_race: 1,
    unit3_tier: 1,
    unit3_type:1,
    unit3_choice: 'UAA0101',

    unit4_race: 1,
    unit4_tier: 1,
    unit4_type: 1,
    unit4_choice: 'UAA0101'
};
var $races = { aeon:1, cybran:2, uef:3, seraphim:4 }; 
var $arenas = { air:1, land:2, navy:3, building:4 };
var $chosens = { unit1:false, unit2:false };

function notice() {
    alert(
        'unit1: ' + $globals['unit1_race'] + ' ' + $globals['unit1_tier'] + ' ' + $globals['unit1_type'] + '\n' +
        'unit2: ' + $globals['unit2_race'] + ' ' + $globals['unit2_tier'] + ' ' + $globals['unit2_type'] + '\n' +
        'unit3: ' + $globals['unit3_race'] + ' ' + $globals['unit3_tier'] + ' ' + $globals['unit3_type'] + '\n' +
        'unit4: ' + $globals['unit4_race'] + ' ' + $globals['unit4_tier'] + ' ' + $globals['unit4_type'] + '\n'
    );
}

window.onload = function() {
    changeBorder('unit1', 'aeon');
    changeRace('unit1', 'aeon');
    changeTier('unit1', 1);
    changeType('unit1', 'air');
    changeChoice('unit1', 'UAA0101');

    changeBorder('unit2', 'cybran');
    changeRace('unit2', 'cybran');
    changeTier('unit2', 1);
    changeType('unit2', 'air');
    changeChoice('unit2', 'URA0101');

    changeBorder('unit3', 'uef');
    changeRace('unit3', 'uef');
    changeTier('unit3', 1);
    changeType('unit3', 'air');
    changeChoice('unit3', 'UEA0101');

    changeBorder('unit4', 'seraphim');
    changeRace('unit4', 'seraphim');
    changeTier('unit4', 1);
    changeType('unit4', 'air');
    changeChoice('unit4', 'XSA0101');

    showGroups('unit1');
    showGroups('unit2');
    showGroups('unit3');
    showGroups('unit4');

    document.getElementById('loading').innerHTML = "";
    document.getElementById('compare-link').innerHTML = '<button class="feedback-button center">Compare These Units!</button>';
    updateLink();
    //notice();
}

function showGroups($unit) {
    var $groups = document.getElementsByClassName('compare-group');
    var $count = $groups.length;
    
    for($i = 0; $i < $count; $i++) {

        if($groups[$i].id.substr(0,5) == $unit) {
            $groups[$i].setAttribute("style", "display: none;");
        }        
    }
    $index = $unit + 'r' + $globals[$unit + '_race'] + 't' + $globals[$unit + '_tier'] + 'a' + $globals[$unit + '_type'];
    //alert($index);
    document.getElementById($index).setAttribute("style", "display: visible;");
}

function updateLink() {
    var $link = "/compare/" + $globals['unit1_choice'] + '/' + $globals['unit2_choice'] + '/' + $globals['unit3_choice'] + '/' + $globals['unit4_choice'];
    document.getElementById('compare-link').setAttribute("href", $link);
    
}

function clearChoices($unit) {
    var $units = getAllElementsWithAttribute('unit');
    for ($i = 0; $i < $units.length; $i++) {
        if($units[$i].getAttribute('unit') == $unit) {
            $units[$i].setAttribute("class", "compare-unit-unselected");
        }
    }
    //alert($units.length);
}
function updateChoice($unit) {
    document.getElementById($unit + "_choice").innerHTML = $globals[$unit + "_choice"];
}

function changeChoice($unit, $choice) {
    clearChoices($unit);
    //alert($unit + ' ' + $choice);
    document.getElementById($unit + $choice).setAttribute("class", "compare-unit-selected");
    $globals[$unit + "_choice"] = $choice;
    updateChoice($unit);
    updateLink();
    
}

function changeRace($unit, $race) {
    clearRace($unit);        
    document.getElementById($unit + "_" + $race).setAttribute("class", "compare-selected");   
    $globals[$unit + "_race"] = $races[$race];             

    changeBorder($unit, $race);
    //notice();
}
    
function changeTier($unit, $tier) {
    clearTier($unit);        
    document.getElementById($unit + "_tier" + $tier).setAttribute("class", "compare-selected");
    $globals[$unit + "_tier"] = $tier;
    //notice();
    showGroups($unit);
}

function changeType($unit, $type) {
    clearType($unit);
    document.getElementById($unit + "_type_" + $type).setAttribute("class", "compare-selected");
    $globals[$unit + "_type"] = $arenas[$type];
    //notice(); 
    showGroups($unit); 
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
   showGroups($unit);

}

function getAllElementsWithAttribute(attribute)
{
  var matchingElements = [];
  var allElements = document.getElementsByTagName('*');
  for (var i = 0, n = allElements.length; i < n; i++)
  {
    if (allElements[i].getAttribute(attribute) !== null)
    {
      // Element exists with attribute. Add to array.
      matchingElements.push(allElements[i]);
    }
  }
  return matchingElements;
}





function populateSelect($unit) {
    // clearSelect($unit);
    // $.ajax({ url: "compare/getOptions/" + $globals[$unit + "_race"] + "/" + $globals[$unit + "_tier"] + "/" + $globals[$unit + "_type"] })
    // .done(function( html ) { $( "#" + $unit + "_select" ).append( html ); });

    if($chosens["unit1"] && $chosens["unit2"]) {
        showStep5();
    }        
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
    document.getElementById($unit + "_type_air").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_type_land").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_type_navy").setAttribute("class", "compare-unselected");
    document.getElementById($unit + "_type_building").setAttribute("class", "compare-unselected");
}

function clearSelect($unit) {
    document.getElementById($unit + "_select").innerHTML = "";
}

function hideCompareButton() {
    
}















/** 
    ADMIN PANEL AJAX FUNCTIONS FOR APPROVALS AND DECLINES
*/

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















/**
    SMOOTH SCROLL QUICK NAV
*/

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








/**
    TEXT BOX CHARACTER COUNTERS AND LIMITERS
*/

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







/**
    SCREENSHOT SLICK CAROUSEL
*/

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