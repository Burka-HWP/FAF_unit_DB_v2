
<div class="content-block">   
    <div class="row-fluid">
        <div class="span12 center">
            <img src="/assets/images/layout/faf_welcome.png" class="race-title-image" />
        </div>            
    </div>

    <div class="row-fluid category cybran-bg">            
        <div class="span12">
            <h3 id="welcome" class="home-text-new" style="font-size: 30px;">admin panel</h3>
        </div>                       
    </div>  

    <div class="row-fluid">
      <div class="span12 welcome">
        <div class="row-fluid">
          <div class="span6">
            <h3 id="welcome" class="home-text-new" style="font-size: 30px;">Screenshots</h3>

            {screenshots}
            <div style="margin: 10px 10px 75px 10px;">
              <img src="/assets/images/uploads/{file_name}" style="width: auto; height: auto; max-width: 450px; max-height: 225px; margin: 0px auto; display: block;"/>
              <div class="row-fluid">
                <div class="span2">
                  <img src="/assets/images/layout/{race_name}.png" />
                </div>
                <div class="span8">
                  <h4 class="home-text-new">T{unit_tier} {unit_class}</h4>
                  <h4 class="{race_name}-text-new">{unit_name}</h4>
                </div>
                <div class="span2">
                  <h4>{blueprint_id}</h4>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <p>User: {user_id}</p>
                  <p>Date: {submitted_on}</p>
                </div>
                <div id="{scrn_id}" class="span6">
                  <button class="feedback-button center" onclick="approveScrn({scrn_id})">Approve!</button>
                  <button class="feedback-button center" onclick="declineScrn({scrn_id})">Decline</button>
                </div>
              </div>
              
            </div>
            
            {/screenshots}

          </div>
          <div class="span6">
            <h3 id="welcome" class="home-text-new" style="font-size: 30px;">Descriptions</h3>

            {descriptions}
            <p>{description}</p>
            <p>{blueprint_id} {user_id} {submitted_on} {unit_class} {unit_name}</p>
            <hr />
           {/descriptions}
          </div>
        </div>

      </div>


    </div>

    
</div>

    <div style="margin-bottom: 20px;"></div>
      
