<div class="content-wrapper-show {race}-view">
    <div class="content-block dark-bg">
        <div class="row-fluid">
            <div class="span12 center">
                <img src="/assets/images/layout/{race}_banner.png" />
            </div>            
        </div>

        <div id="command-link" onclick="collapse('command')">
            <div class="row-fluid category {race}-bg-trans">
                <div class="span4 collapse-link-spacing">                    
                    <button id="command-btn" class="collapse-button">-</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Command</h3>
                </div>         
                <div class="span4"></div>   
            </div>
        </div>        
        <div id="command-data">
            {command-units}
        </div>

        <div id="engineering-link" onclick="expand('engineering')">
            <div class="row-fluid category {race}-bg-trans">
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
            {engineering-units} 
        </div>

        <div id="factories-link" onclick="expand('factories')">
            <div class="row-fluid category {race}-bg-trans">
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
            {factory-units} 
        </div>
        
        <div id="economy-link" onclick="expand('economy')">
            <div class="row-fluid category {race}-bg-trans">
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
            {economy-units} 
        </div>
        
        <div id="bldg-attack-link" onclick="expand('bldg-attack')">
            <div class="row-fluid category {race}-bg-trans">
                <div class="span4 collapse-link-spacing">                    
                    <button id="bldg-attack-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Building - Attack</h3>
                </div>         
                <div class="span4"></div>   
            </div>
        </div>
        <div id="bldg-attack-data" style="display: none;">
            {attack-buildings}
        </div>
        
        <div id="bldg-defense-link" onclick="expand('bldg-defense')">
            <div class="row-fluid category {race}-bg-trans">
                <div class="span4 collapse-link-spacing">                    
                    <button id="bldg-defense-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Building - Defense</h3>
                </div>         
                <div class="span4"></div>   
            </div>
        </div>
        <div id="bldg-defense-data" style="display: none;">
            {defense-buildings}
        </div>
        
        <div id="bldg-sensor-link" onclick="expand('bldg-sensor')">
            <div class="row-fluid category {race}-bg-trans">
                <div class="span4 collapse-link-spacing">                    
                    <button id="bldg-sensor-btn" class="collapse-button">+</button>
                </div>
                <div class="span4">
                    <h3 class="electrolize">Building - Sensor</h3>
                </div>         
                <div class="span4"></div>   
            </div>
        </div>  
        <div id="bldg-sensor-data" style="display: none;">
            {sensor-buildings}
        </div>
        
        <div id="air-link" onclick="expand('air')">
            <div class="row-fluid category {race}-bg-trans">
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
            {aircraft}
        </div>
        
        <div id="vehicles-link" onclick="expand('vehicles')">
            <div class="row-fluid category {race}-bg-trans">
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
            {vehicles}
        </div>
        
        
        
        <div id="naval-link" onclick="expand('naval')">
            <div class="row-fluid category {race}-bg-trans">
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
            {naval}
        </div>

        <div id="support-link" onclick="expand('support')">
            <div class="row-fluid category {race}-bg-trans">
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
            {support}
        </div>
        <div style="margin-bottom: 20px;"></div>
    </div>
</div>
