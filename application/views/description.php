
<div class="content-block">   
    <div class="row-fluid">
        <div class="span12 center">
            <img src="/assets/images/layout/faf_welcome.png" class="race-title-image" />
        </div>            
    </div>

    <div class="row-fluid category black-bg">            
        <div class="span12">
            <h3 id="welcome" class="home-text-new" style="font-size: 30px;">Submit a Description!</h3>
        </div>                       
    </div>  

    <div class="row-fluid">
      <div class="span12 welcome center">
        <div class="row-fluid">
          <div class="span2"></div>
          <div class="span8 center">
            <div class="row-fluid">
              <div class="span2">
                <img src="/assets/images/layout/{race}.png" />
              </div>
              <div class="span8">
                <p>fesf</p>
              </div>
              <div class="span2">
                <p>{blueprint_id}</p>
              </div>
            </div>
          </div>
          <div class="span2"></div>
        </div>



        <form method="POST" action="/contribute/submitDesc/{blueprint_id}" />
            <p id="description-ta-counter" style="text-align:right;">Chars: 1000</p>
            <textarea id="description-ta" class="feedback-textarea" name="description" placeholder="Describe it..." maxlength="1000"></textarea><br />
            <input type="submit" value="Submit" class="feedback-button"/>
        </form>
          <p></p>
          
          
        
      </div>


    </div>

    
</div>

    <div style="margin-bottom: 20px;"></div>
      
