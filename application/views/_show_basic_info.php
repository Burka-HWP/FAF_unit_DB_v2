<div class="info-avatar {unit_arena}">
    <img src="../assets/images/units/{avatar}" />
    <img src="../assets/images/strategic/{unit_icon}" class="strat_icon" />
</div>
<div class="info-title">
    <h4 class="white">{race_name} {unit_class}</h4>
    <h4 class="{race}">{unit_name}</h4>
    <p class="blueprint">Blueprint ID: {blueprint_id}</p>
</div>
<div class="info-tier">
    <img src="../assets/images/tiers/{unit_tier}.png" />
</div> 
<div class="clear"></div>
<hr style="margin-bottom: 20px;"/>
<div class="row-fluid">
	<div class="span7">
		<!-- data -->
		<div class="row-fluid">
			<!-- <div class="span1"></div> -->
			<div class="span3">
        		<h4 class="{race}">Build Cost</h4>
        		<div class="row-fluid">
        			<div class="span3 ">
        				<img  src="../assets/images/attributes/mass.png" />
        			</div>
        			<div class="span9 ">
        				<h5>{unit_mass_cost}</h5>
        			</div>
        		</div>
        		<div class="row-fluid">
        			<div class="span3 ">
        				<img  src="../assets/images/attributes/energy.png" />
        			</div>
        			<div class="span9 ">
        				<h5>{unit_energy_cost}</h5>
        			</div>
        		</div>
        		<div class="row-fluid">
        			<div class="span3 ">
        				<img  src="../assets/images/attributes/time.png" />
        			</div>
        			<div class="span9 ">
        				<h5>{unit_build_time}</h5>
        			</div>
        		</div>	
        		
        	</div>
        	<div class="span4">
        		<h4 class="{race}">Health</h4>
        		<div class="row-fluid">
        			<div class="span2 ">
        				<img  src="../assets/images/attributes/health.png" />
        			</div>
        			<div class="span10 ">
        				<h5>{unit_health}</h5>
        			</div>
        		</div>
                <h5><span class="attribute">Regen Rate:</span> {regen}</h5>
        		<br />
        		<h4 class="{race}">Wreakage</h4>
        		<div class="row-fluid">
        			<div class="span2">
        				<img  src="../assets/images/attributes/health.png" />
        			</div>
        			<div class="span10">
        				<h5>{w_hp}</h5>
        			</div>
        		</div>
        		<div class="row-fluid">
        			<div class="span2">
        				<img  src="../assets/images/attributes/mass.png" />
        			</div>
        			<div class="span10">
        				<h5>{w_mass}</h5>
        			</div>
        		</div>
        	</div>
        	<div class="span5">
        		<!-- General attribute stats loaded here -->
<!--        		<h4 class="{race}">Shield</h4>                        
				<div class="row-fluid">
        			<div class="span2">
        				<img  src="../assets/images/attributes/health.png" />
        			</div>
        			<div class="span10 ">
        				<h5>{sh_health}</h5>
        			</div>
        		</div>						
				<h5><span class="attribute">Regen Rate:</span> +{sh_regen} hp/sec</h5>
				<br />-->
                        {shield_info}
        		<h4 class="{race}">Basic Attributes</h4>
        		<h5><span class="attribute">Max Speed:</span> {max_speed}</h5>
        		<h5><span class="attribute">Turn Rate:</span> {turn_rate}</h5>
        		<h5><span class="attribute">Vision Radius:</span> {v_rad}</h5>
	       	</div>
		</div>
		<div class="row-fluid">
			<!-- <div class="span1"></div> -->
			<div class="span11">
				<h4 class="{race}">Description</h4>
				<p>{description}</p>
			</div>
			<div class="span1"></div>

		</div>
	</div>
	<div class="span5">
		<!-- avatar -->
        <div class="row-fluid">
            <div class="span12">
		        <div class="menu-block-left">
                    <img src="../../assets/images/portraits/{portrait}" />
	            </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <br />
                <h4 class="{race}">Abilities</h4>
                <p>ability1, ability2, ability3, ability4, etc.</p>
            </div>
        </div>
	</div>	
</div>
