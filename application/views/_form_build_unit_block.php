<div id="{unit}_step1" class="compare-row-spacing">
    <!-- <h4><span class="electrolize">Step 1: </span> Choose a race</h4> -->
    <p>Filters:</p>
    <div class="row-fluid">        
        <div class="span12">
            <div class="row-fluid" style="background-color: #111; box-sizing: border-box;">                    
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
<div id="{unit}_step2" class="compare-row-spacing" style="visibility: visible;">
    <!-- <h4><span class="electrolize">Step 2: </span> Choose a tier</h4> -->
    <div class="row-fluid">   
        <div class="span12">
            <div class="row-fluid" style="background-color: #111;"> 
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
<div id="{unit}_step3" class="compare-row-spacing" style="visibility: visible;">
    <!-- <h4><span class="electrolize">Step 3: </span> Choose a type</h4> -->
    <div class="row-fluid">       
        <div class="span12">
            <div class="row-fluid" style="background-color: #111;">        
                <div class="span3 center">        
                    <img id="{unit}_type_air" class="compare-unselected" src="/assets/images/compare/air.png" onclick="changeType('{unit}','air')" />            
                </div>
                <div class="span3 center">
                    <img id="{unit}_type_land" class="compare-unselected" src="/assets/images/compare/land.png"  onClick="changeType('{unit}','land')" />     
                </div>  
                <div class="span3 center">
                    <img id="{unit}_type_navy" class="compare-unselected" src="/assets/images/compare/navy.png"  onClick="changeType('{unit}','navy')" />     
                </div>
                <div class="span3 center">
                    <img id="{unit}_type_building" class="compare-unselected" src="/assets/images/compare/building.png"  onClick="changeType('{unit}','building')" />     
                </div>           
            </div>
        </div>

    </div>
</div>
<div id="{unit}_step4" class="compare-row-spacing" style="visibility: visible;">
    <!-- <h4><span class="electrolize">Step 4: </span> Choose a unit</h4> -->
    <p>Available Units:</p>
    {allcounts}
        <div id="{unit}{index}" class="compare-group" style="display: visible;">
            {unit}{index} {count}
        </div>
    {/allcounts}
</div>


