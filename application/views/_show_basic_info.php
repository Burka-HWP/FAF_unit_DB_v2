<img src="/assets/images/show/gen-info.png"/>
<hr style="margin-bottom: 20px;"/>
<div class="clear"></div>
<div style="margin-bottom: 20px; width: 600px; float: left;">
    <div class="info-avatar {unit_arena}">
        <img src="../assets/images/units/{avatar}" />
        <img src="../assets/images/strategic/{unit_icon}" class="strat_icon" />
    </div>
    <div class="info-title">
        <h4 class="white">{race_name} {tech} {unit_class}</h4>
        <h4 class="{race}">{unit_name}</h4>
        <p class="blueprint">Blueprint ID: {blueprint_id}</p>
    </div>
    <div class="info-tier">
        <img src="../assets/images/tiers/{unit_tier}.png" />
    </div> 
    <div class="clear"></div>
</div>
<div class="menu-block-right">
    <div style="width: 450px; margin: 10px auto;">
          <div class="slider slider-for" style="margin-bottom: 10px;">
            <div><img src="http://placehold.it/450x225/ff0000" style="display: block; margin: 0px auto;"/></div>
            <div><img src="http://placehold.it/450x200/00ff00" style="display: block; margin: 0px auto;"/></div>
            <div><img src="http://placehold.it/225x225/0000ff" style="display: block; margin: 0px auto;"/></div>
            <div><img src="http://placehold.it/450x225/333333" style="display: block; margin: 0px auto;"/></div>
            <div><img src="http://placehold.it/400x225/444444" style="display: block; margin: 0px auto;"/></div>
          </div>
          <div class="slider slider-nav">
            <div><img src="http://placehold.it/450x225/ff0000" style="width: 120px; height: 75px;"/></div>
            <div><img src="http://placehold.it/450x200/00ff00" style="width: 120px; height: 75px;"/></div>
            <div><img src="http://placehold.it/225x225/0000ff" style="width: 120px; height: 75px;"/></div>
            <div><img src="http://placehold.it/450x225/333333" style="width: 120px; height: 75px;"/></div>
            <div><img src="http://placehold.it/400x225/444444" style="width: 120px; height: 75px;"/></div>
          </div>
        </div>
    <!-- <img src="http://placehold.it/450x250"/> -->
    <a href="/contribute/screenshot/{blueprint_id}"><button class="feedback-button center">Submit a Screenshot!</button></a>
</div>
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
                        <h5><span class="attribute">Regen:</span> +{unit_regen} hp/sec</h5>
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
        		
                        {shield_info}
        		{abilities_info}
                        {economy_info}
                    </div>
		</div>
		<div class="row-fluid">
			<!-- <div class="span1"></div> -->
			<div class="span11">
				<h4 class="{race}">Description</h4>
                <p>{descCount}</p>
                <p>{apprDesc}</p>
                <!-- <form method="POST" action="/unit/submitDesc/{blueprint_id}" />
                    <textarea name="description"></textarea>
                    <input type="submit" value="Submit" />
                </form> -->
                {button}
			</div>
			<div class="span1"></div>

		</div>
                
	</div>
	<div class="span5">
		<!-- avatar -->
        <div class="row-fluid">
            <div class="span12">
		        
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <br />
                
            </div>
        </div>
	</div>	
</div>
