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
                    <span class="attribute">DPS:</span> {attack_dps}
                    <span class="attribute">, Range:</span> {min_radius} - {max_radius}
                </h5>
            </div>                    
        </div>
        <div class="row-fluid">
            <div class="span12">
                <h5 class="no-margin">
                    <span class="attribute">Projectile:</span> {damage} damage
                </h5>
                <h5 class="no-margin">
                    <span class="attribute">Muzzle Velocity:</span> {attack_muzzle_velocity}
                    <span class="attribute">, Lifetime:</span> {attack_lifetime}
                </h5>
                <h5 class="no-margin">
                    <span class="attribute">Fire Cycle:</span> {muzzle_salvo_size} projectile(s) every {seconds_per_cycle} second(s), {cycle_total_damage} damage/cycle
                </h5>
                <h5 class="no-margin">
                    <span class="attribute">Turret Pitch:</span> {turret_pitch}&deg; &plusmn; {turret_pitch_range}&deg; ({turret_pitch_speed}&deg;/sec)
                    <span class="attribute">, Turret Yaw:</span> {turret_yaw}&deg; &plusmn; {turret_yaw_range}&deg; ({turret_yaw_speed}&deg;/sec)
                </h5>
                <h5 class="no-margin">
                    <span class="attribute">Firing Tolerance:</span> {attack_firing_tolerance}
                    <span class="attribute">, Firing Randomness:</span> {attack_firing_randomness}
                    <span class="attribute">, Area of Effect:</span> {damage_radius}
                    <span class="attribute">, Energy Required:</span> {attack_energy_req}
                </h5>
            </div>
        </div>

<!--                {attack_muzzle_velocity} {attack_dps} {total_dps}-->
    </div>
    <div class="span2 center">
        <h5 class="no-margin attribute">Overall DPS</h5>
        <h2 class="no-margin">{total_dps}</h2>
    </div>
</div> 
