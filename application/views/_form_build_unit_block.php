<div id="{unit}_step1" class="compare-row-spacing">
    <!-- <h4><span class="electrolize">Step 1: </span> Choose a race</h4> -->
    <!-- <p>Filters:</p> -->
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
    <!-- <p>Available Units:</p> -->
    {allcounts}
        <div id="{unit}{index}" class="compare-group" style="display: none;">
            {units}
            <div id="{unit}{blueprint_id}" unit="{unit}" class="compare-unit-unselected" onclick="changeChoice('{unit}', '{blueprint_id}')">
                <div class="row-fluid">
                    <div class="span4">
                        <div class="info-avatar {unit_arena}">
                            <img src="../assets/images/units/{blueprint_id}.png" />
                            <img src="../assets/images/strategic/{unit_icon}" class="strat_icon" />
                        </div> 
                        <div class="clear"></div>
                    </div>
                    <div class="span8" style="padding-top: 10px;">
                        <p class="white">{unit_class}</p>
                        <p class="{unit_race}-text-new">{unit_name}</p> 
                    </div>
                </div>         
            </div>
            
            {/units}
            
        </div>
    {/allcounts}
</div>
<p class="compare-choice">Current Choice: 
    <span id="{unit}_choice">
    <img src="/assets/images/admin/progress.gif" style="height: 15px; width: auto; display: inline-block; margin: 5px;" />
    </span>
</p>


