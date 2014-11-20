<div class="content-wrapper-inner">
    <div class="content-block">    
        <div class="row-fluid">
            <div class="race-block">
                <img src="../../assets/images/all/aeon_title.png" class="title-image"/>
            </div>
            <div class="race-block">
                <img src="../../assets/images/all/cybran_title.png" class="title-image"/>
            </div>
            <div class="race-block">
                <img src="../../assets/images/all/uef_title.png" class="title-image"/>
            </div>
            <div class="race-block">
                <img src="../../assets/images/all/seraphim_title.png" class="title-image"/>
            </div>
        </div>
        <div class="columns">
            <div id="command-link" onclick="collapse('command')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="command-btn" class="collapse-button">-</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Command</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="command-data" class="row-fluid">
                <div class="race-block">                
                    {aeon-command}               
                </div>
                <div class="race-block">                
                    {cybran-command}               
                </div> 
                <div class="race-block">                
                    {uef-command}               
                </div> 
                <div class="race-block">                
                    {seraphim-command}               
                </div>                        
            </div>
            
            <div id="engineering-link" onclick="expand('engineering')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="engineering-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Engineering</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="engineering-data" style="display: none;">
                {engineering-1}
                {engineering-2}
                {engineering-3}
            </div>

            <div id="factories-link" onclick="expand('factories')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="factories-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Factories</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="factories-data" style="display: none;">
                {factory-1}
                {factory-2}
                {factory-3}
            </div>

            <div id="economy-link" onclick="expand('economy')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="economy-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Economy</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="economy-data" style="display: none;">
                {economy-1}
                {economy-2}
                {economy-3}
                {economy-4}
            </div>

            <div id="bldg-attack-link" onclick="expand('bldg-attack')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="bldg-attack-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Buildings - Attack</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="bldg-attack-data" style="display: none;">
                {attack-1}
                {attack-2}
                {attack-3}
                {attack-4}
            </div>

            
            <div id="bldg-defense-link" onclick="expand('bldg-defense')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="bldg-defense-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Buildings - Defense</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="bldg-defense-data" style="display: none;"> 
                {defense-2}
                {defense-3}
            </div>

                
            <div id="bldg-sensor-link" onclick="expand('bldg-sensor')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="bldg-sensor-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Buildings - Sensor</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="bldg-sensor-data" style="display: none;">
                {sensor-1}
                {sensor-2}
                {sensor-3}
            </div>

            <div id="air-link" onclick="expand('air')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="air-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Aircraft</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="air-data" style="display: none;">
                {aircraft-1}
                {aircraft-2}
                {aircraft-3}
                {aircraft-4}
            </div>

            <div id="vehicles-link" onclick="expand('vehicles')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="vehicles-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Vehicles</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="vehicles-data" style="display: none;">
                {vehicle-1}
                {vehicle-2}
                {vehicle-3}
                {vehicle-4}
            </div>

            <div id="naval-link" onclick="expand('naval')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="naval-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Navy</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="naval-data" style="display: none;">
                {naval-1}
                {naval-2}
                {naval-3}
                {naval-4}
            </div>

            <div id="support-link" onclick="expand('support')">
            <div class="row-fluid category black-bg">
                <div class="span4 collapse-link-spacing">                    
                    <button id="support-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Support</h3>
                </div>         
                <div class="span4"></div>   
            </div>
            </div>
            <div id="support-data" style="display: none;">
                {support-1}
                {support-2}
                {support-4}
            </div>

        </div>
        <div style="margin-bottom: 20px;"></div>
    </div>        
</div>