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
            <div class="span6">
                <h5><span class="attribute">Inner Nuke Radius: </span>{nuke_inner_ring_radius}<br />
                <span class="attribute">Inner Nuke Damage: </span>{nuke_inner_ring_damage}</h5>
            </div>
            <div class="span6">
                <h5><span class="attribute">Outer Nuke Radius: </span>{nuke_outer_ring_radius}<br />
                <span class="attribute">Outer Nuke Damage: </span>{nuke_outer_ring_damage}</h5>
            </div>
        </div>
        

<!--                {attack_muzzle_velocity} {attack_dps} {total_dps}-->
    </div>
    <div class="span2 center">
        <h5 class="no-margin attribute">Max Damage</h5>
        <h2 class="no-margin">{nuke_inner_ring_damage}</h2>
    </div>
</div> 
