<div id="{unit}_step1" class="compare-row-spacing">
    <!-- <h4><span class="electrolize">Step 1: </span> Choose a race</h4> -->
    <div class="row-fluid">
        <div class="span2 center">
            <h4 class="electrolize">Race:</h4>
        </div>
        <div class="span10">
            <div class="row-fluid">                    
                <div class="span3 center">        
                    <img id="{unit}_aeon" class="compare-unselected" src="/assets/images/compare/aeon.png" onclick="changeRace('{unit}','aeon')" />            
                </div>
                <div class="span3 center">
                    <img id="{unit}_cybran" class="compare-unselected" src="/assets/images/compare/cybran.png" onClick="changeRace('{unit}','cybran')" />     
                </div>
                <div class="span3 center">
                    <img id="{unit}_uef" class="compare-unselected" src="/assets/images/compare/uef.png" onClick="changeRace('{unit}','uef')" />           
                </div>
                <div class="span3 center">
                    <img id="{unit}_seraphim" class="compare-unselected" src="/assets/images/compare/seraphim.png" onClick="changeRace('{unit}','seraphim')" />
                </div>       
            </div>
        </div>
    </div>
</div>
<div id="{unit}_step2" class="compare-row-spacing" style="visibility: hidden;">
    <!-- <h4><span class="electrolize">Step 2: </span> Choose a tier</h4> -->
    <div class="row-fluid">   
        <div class="span2 center">
            <h4 class="electrolize">Tier:</h4>
        </div>
        <div class="span10">
            <div class="row-fluid"> 
                <div class="span3 center">        
                    <img id="{unit}_tier1" class="compare-unselected" src="/assets/images/tiers/1.png" onclick="changeTier('{unit}',1)" />            
                </div>
                <div class="span3 center">
                    <img id="{unit}_tier2" class="compare-unselected" src="/assets/images/tiers/2.png" onClick="changeTier('{unit}',2)" />     
                </div>
                <div class="span3 center">
                    <img id="{unit}_tier3" class="compare-unselected" src="/assets/images/tiers/3.png" onClick="changeTier('{unit}',3)" />           
                </div>
                <div class="span3 center">
                    <img id="{unit}_tier4" class="compare-unselected" src="/assets/images/tiers/4.png" onClick="changeTier('{unit}',4)" />
                </div>       
            </div>
        </div>
    </div>
</div>
<div id="{unit}_step3" class="compare-row-spacing" style="visibility: hidden;">
    <!-- <h4><span class="electrolize">Step 3: </span> Choose a type</h4> -->
    <div class="row-fluid">
        <div class="span2 center">
            <h4 class="electrolize">Type:</h4>
        </div>
        <div class="span10">
            <div class="row-fluid">        
                <div class="span6 center">        
                    <img id="{unit}_type_unit" class="compare-unselected" src="/assets/images/compare/unit.png" onclick="changeType('{unit}','unit')" />            
                </div>
                <div class="span6 center">
                    <img id="{unit}_type_building" class="compare-unselected" src="/assets/images/compare/building.png" onClick="changeType('{unit}','building')" />     
                </div>             
            </div>
        </div>

    </div>
</div>
<div id="{unit}_step4" class="compare-row-spacing" style="visibility: hidden;">
    <!-- <h4><span class="electrolize">Step 4: </span> Choose a unit</h4> -->
    <div class="row-fluid">
        <div class="span12 center">
            <select id="{unit}_select" class="compare-select" name="{unit}_bp">
                {options}
            </select>       
        </div>
    </div>
</div>


