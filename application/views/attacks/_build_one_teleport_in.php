<div class="row-fluid attack-spacing">
    <div class="span1">
        <h2>{multiplier}x</h2>
    </div>
    <div class="span9">
        <div class="row-fluid">
            <div class="span7">                
                <h5><span class="{race}-text">{display_name}</span><br />({weapon_category}, {damage_type})</h5>
            </div>
            <div class="span5">
                <h5>
                    <br />
                    <span class="attribute">Range:</span> {min_radius} - {max_radius}
                </h5>
            </div>                    
        </div>
        <div class="row-fluid">
            <div class="span12">
                <h5 class="no-margin">
                    <span class="attribute">Projectile:</span> {damage} damage <br />      
                    <span class="attribute">Area of Effect:</span> {damage_radius}</h5>
                    
                
            </div>
        </div>

<!--                {attack_muzzle_velocity} {attack_dps} {total_dps}-->
    </div>
    <div class="span2 center">
        {show_overall_dps}
    </div>
</div> 
