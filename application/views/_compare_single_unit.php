<div class="content-wrapper-show {race}-view compare-gap-top">
    <div class="table-block">
        <a href="/unit/{blueprint_id}">
            <div class="row-fluid">
                <div class="span2">
                    <div class="info-avatar {unit_arena}">
                        <img src="/assets/images/units/{avatar}" />
                        <img src="/assets/images/strategic/{unit_icon}" class="strat_icon" />
                    </div>
                </div>
                <div class="span8">
                    <h4 class="white electrolize">{race_name} {unit_class}</h4>
                    <h4 class="{race} electrolize">{unit_name}</h4>
                    <p class="blueprint">Blueprint ID: {blueprint_id}</p>
                </div>
                <div class="span2">
                    <div class="info-tier">
                        <img src="/assets/images/tiers/{unit_tier}.png" />
                    </div> 
                </div>
            </div>
        </a>
        <hr style="margin-bottom: 20px;"/>
        <div class="row-fluid">
	<div class="span12">
		<!-- data -->
		<div class="row-fluid">
			<!-- <div class="span1"></div> -->
                    <div class="span3">
        		<h4 class="{race}">Build Cost</h4>
        		<div class="row-fluid">
        			<div class="span3 ">
        				<img  src="/assets/images/attributes/mass.png" />
        			</div>
        			<div class="span9 ">
        				<h5>{unit_mass_cost}</h5>
        			</div>
        		</div>
        		<div class="row-fluid">
        			<div class="span3 ">
        				<img  src="/assets/images/attributes/energy.png" />
        			</div>
        			<div class="span9 ">
        				<h5>{unit_energy_cost}</h5>
        			</div>
        		</div>
        		<div class="row-fluid">
        			<div class="span3 ">
        				<img  src="/assets/images/attributes/time.png" />
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
        				<img  src="/assets/images/attributes/health.png" />
        			</div>
        			<div class="span10 ">
        				<h5>{unit_health}</h5>
        			</div>
        		</div>
                        <h5><span class="attribute">Regen:</span> +{unit_regen} hp/sec</h5>
        		<br />
        		<h4 class="{race}">Wreakage</h4>
        		<div class="row-fluid">
        			<div class="span2">
        				<img  src="/assets/images/attributes/health.png" />
        			</div>
        			<div class="span10">
        				<h5>{w_hp}</h5>
        			</div>
        		</div>
        		<div class="row-fluid">
        			<div class="span2">
        				<img  src="/assets/images/attributes/mass.png" />
        			</div>
        			<div class="span10">
        				<h5>{w_mass}</h5>
        			</div>
        		</div>
                    </div>
                    <div class="span5">
        		
                        {shield_info}
        		{abilities_info}
                        {economy_info}
                    </div>
		</div>
		<div class="row-fluid">
			<!-- <div class="span1"></div> -->
			<div class="span11">
				<h4 class="{race}">Description</h4>
				<p>{unit_description}</p>
			</div>
			<div class="span1"></div>

		</div>
                
            </div>
        </div>
        {veterancy}
        {attacks}
    </div>
</div>

