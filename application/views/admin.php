
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
            <h3 id="welcome" class="home-text-new center" style="font-size: 30px;">Screenshots</h3>

            {screenshots}
            <div class="black-bg" style="margin-top: 20px; padding: 15px;">
              <div class="row-fluid">
                <div class="span1">
                  <img src="/assets/images/layout/{race_name}.png" />
                </div>
                <div class="span8">
                  <h4 class="all-text-new">T{unit_tier} {unit_class}</h4>
                  <h4 class="{race_name}-text-new">{unit_name}</h4>
                </div>
                <div class="span3">
                  <h4>{blueprint_id}</h4>
                </div>
              </div>
              <img src="/assets/images/uploads/{file_name}" style="width: auto; height: auto; max-width: 450px; max-height: 225px; margin: 0px auto; display: block;"/>
              
              <div class="row-fluid" style="margin-top: 10px;">
                <div class="span6">
                  <p>User: {user_id}</p>
                  <p>Date: {submitted_on}</p>
                </div>
                <div id="s{scrn_id}" class="span6">
                  <div class="row-fluid">
                    <div class="span6">
                      <button class="approve-button center" onclick="approveScrn({scrn_id})">Approve</button>
                    </div>
                    <div class="span6">
                      <button class="decline-button center" onclick="declineScrn({scrn_id})">Decline</button>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            
            {/screenshots}

          </div>
          <div class="span6">
            <h3 id="welcome" class="home-text-new center" style="font-size: 30px;">Descriptions</h3>

            {descriptions}
            <div class="black-bg" style="margin-top: 20px; padding: 15px;">
              <div class="row-fluid">
                <div class="span1">
                  <img src="/assets/images/layout/{race_name}.png" />
                </div>
                <div class="span8">
                  <h4 class="all-text-new">T{unit_tier} {unit_class}</h4>
                  <h4 class="{race_name}-text-new">{unit_name}</h4>
                </div>
                <div class="span3">
                  <h4>{blueprint_id}</h4>
                </div>
              </div>
              <p>Description:</p>
              <div style="background-color: #111; margin: 15px; padding: 10px;">
                <p>{description}</p>
              </div>
            
              
              <div class="row-fluid">
                <div class="span6">
                  <p>User: {user_id}</p>
                  <p>Date: {submitted_on}</p>
                </div>
                <div id="d{desc_id}" class="span6">
                  <div class="row-fluid">
                    <div class="span6">
                      <button class="approve-button center" onclick="approveDesc({desc_id})">Approve</button>
                    </div>
                    <div class="span6">
                      <button class="decline-button center" onclick="declineDesc({desc_id})">Decline</button>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            
           {/descriptions}
          </div>
        </div>
        <div class="center"><a href="/admin"><button class="feedback-button">LOAD MORE</button></a></div>
      </div>


    </div>

    
</div>

    <div style="margin-bottom: 20px;"></div>
      
