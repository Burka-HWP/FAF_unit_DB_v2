<div class="row-fluid">
    <a href="/unit/{blueprint_id}">
        <div class="span12 line-item-race">
            <div class="row-fluid">
                <div class="span1">
                    <div class="info-avatar {unit_arena}">
                        <img src="../assets/images/units/{blueprint_id}.png" />
                        <img src="../assets/images/strategic/{unit_icon}" class="strat_icon" />
                    </div>
                </div>
                <div class="span6 padding-tb-five info-title">
                    <h4 class="white">{tech} {unit_class}</h4>
                    <h4 class="{race}-text-new">{unit_name}</h4>
                    <!-- <p class="blueprint">Blueprint ID: {blueprint_id}</p> -->
                </div>
                <div class="span1 race-line-attr-padding">
                    <div class="row-fluid">
        			<div class="span4 ">
        				<img  src="../assets/images/attributes/health.png" />
        			</div>
        			<div class="span8 ">
        				<h5>{unit_health}</h5>
        			</div>
        		</div>
                    {shield_data}
                </div>
                <div class="span1 race-line-attr-padding">
                    <div class="row-fluid">
        			<div class="span4 ">
        				<img  src="../assets/images/attributes/mass.png" />
        			</div>
        			<div class="span8 ">
        				<h5>{unit_mass_cost}</h5>
        			</div>
        		</div>
                </div>
                <div class="span2 race-line-attr-padding">
                    <div class="row-fluid">
        			<div class="span2">
        				<img  src="../assets/images/attributes/energy.png" />
        			</div>
        			<div class="span10">
        				<h5>{unit_energy_cost}</h5>
        			</div>
        		</div>
                </div>
                <div class="span1 race-line-tier-padding">
                    <div class="info-tier">
    <img src="../assets/images/tiers/{unit_tier}.png" />
</div>
                </div>
                
            
            </div>
            
            
            
            
            
            
            
            
        </div>
    </a>
</div>

