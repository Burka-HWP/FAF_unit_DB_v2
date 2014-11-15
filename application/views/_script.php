<script type="text/javascript">
    
    var $globals = { unit1_race:0, unit1_tier:0, unit2_race:0, unit2_tier:0, unit1_type:null, unit2_type:null };
    var $races = { aeon:1, cybran:2, uef:3, seraphim:4 }; 
    var $chosens = { unit1:false, unit2:false };
    
    
    function changeRace($unit, $race) {
        clearRace($unit);        
        document.getElementById($unit + "_" + $race).setAttribute("class", "compare-selected");   
        $globals[$unit + "_race"] = $races[$race];
        clearTier($unit);     
        showStep2($unit);
        clearSelect($unit);
        hideStep3($unit);
        hideStep4($unit);
        hideStep5();
        $chosens[$unit] = false;
        
    }
        
    function changeTier($unit, $tier) {
        clearTier($unit);
        clearType($unit);
        document.getElementById($unit + "_tier" + $tier).setAttribute("class", "compare-selected");
        $globals[$unit + "_tier"] = $tier;
        showStep3($unit);
        hideStep4($unit);
        hideStep5($unit);
        
        
    }
    
    function changeType($unit, $type) {
        clearType($unit);
        document.getElementById($unit + "_type_" + $type).setAttribute("class", "compare-selected");
        $globals[$unit + "_type"] = $type;
        populateSelect($unit);
        showStep4($unit);
    }
    
    
    
    function showStep2($unit) {
        document.getElementById($unit + "_step2").setAttribute("style", "visibility: visible;");
    }
    
    function showStep3($unit) {
        document.getElementById($unit + "_step3").setAttribute("style", "visibility: visible;");
    }
    function hideStep3($unit) {
        document.getElementById($unit + "_step3").setAttribute("style", "visibility: hidden;");
    }
    
    function showStep4($unit) {
        document.getElementById($unit + "_step4").setAttribute("style", "visibility: visible;");
    }
    function hideStep4($unit) {
        document.getElementById($unit + "_step4").setAttribute("style", "visibility: hidden;");
    }
    
    function showStep5() {
        document.getElementById("step5").setAttribute("style", "visibility: visible;");
    }
    function hideStep5() {
        document.getElementById("step5").setAttribute("style", "visibility: hidden;");
    }
    
    function test() {
        alert("unit 1 race: " + $globals["unit1_race"]
                + "\nunit 1 tier: " + $globals["unit1_tier"]
                + "\nunit 2 race: " + $globals["unit2_race"]
                + "\nunit 2 tier: " + $globals["unit2_tier"]);
    }
    
    function resetAll() {
                
    }  
    
    function populateSelect($unit) {
        clearSelect($unit);
        $.ajax({
            url: "compare/getOptions/" + $globals[$unit + "_race"] + "/" + $globals[$unit + "_tier"] + "/" + $globals[$unit + "_type"]
            
            })
        .done(function( html ) {
            $( "#" + $unit + "_select" ).append( html );
            });
        $chosens[$unit] = true;
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
        document.getElementById($unit + "_type_unit").setAttribute("class", "compare-unselected");
        document.getElementById($unit + "_type_building").setAttribute("class", "compare-unselected");
    }
    
    function clearSelect($unit) {
        document.getElementById($unit + "_select").innerHTML = "";
    }
    
    function hideCompareButton() {
        
    }

</script>
