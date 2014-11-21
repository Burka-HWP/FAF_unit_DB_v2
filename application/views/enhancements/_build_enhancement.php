<div class="enhancement-item">
    <div class="row-fluid"  style="margin-bottom: 10px;">
        <div class="span2">
            <img src="../assets/images/enhancements/{icon}.png" />
        </div>
        <div class="span10">
            <h5><span class="{race}-text">{name}</span></h5>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <p>{description}</p>
        </div>
    </div>
    <h5 class="no-margin"><span class="{race}-text">Build Costs</span></h5>
    <div class="row-fluid">
        <div class="span4">
            <div class="row-fluid">
                <div class="span2">
                        <img  src="../assets/images/attributes/mass.png" />
                </div>
                <div class="span10">
                    <h5>{build_cost_mass}<br />{production_m}</h5>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="row-fluid">
                <div class="span2 ">
                        <img  src="../assets/images/attributes/energy.png" />
                </div>
                <div class="span10">
                    <h5>{build_cost_energy}<br />{consumption}{production_e}</h5>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="row-fluid">
                <div class="span2">
                        <img  src="../assets/images/attributes/time.png" />
                </div>
                <div class="span10">
                        <h5>{build_time}</h5>
                </div>
            </div>
        </div>
    </div>
    {shield}
    {b_new_regen}
    {b_health}
    {b_new_build_rate}
    {b_new_rate_of_fire}
    {b_new_max_radius}
    {b_new_vision_radius}
    {b_new_omni_radius}
    {b_new_damage}
    {b_new_damage_radius}
    
</div>