
<div class="content-block">   
    <div class="row-fluid">
        <div class="span12 center">
            <img src="/assets/images/layout/faf_welcome.png" class="race-title-image" />
        </div>            
    </div>

    <div class="row-fluid category black-bg">            
        <div class="span12">
            <h3 id="welcome" class="home-text-new" style="font-size: 30px;">Submit a Screenshot!</h3>
        </div>                       
    </div>  

    <div class="row-fluid">
      <div class="span12 welcome center">
        <div class="row-fluid">
          <div class="span2"></div>
          <div class="span8">            
            <div class="row-fluid center">
              <div class="span2">
                <img src="/assets/images/layout/{race}.png" style="height: 50px; width: auto;"/>
              </div>
              <div class="span8">
                <h4 class="home-text-new">{tech} {unit_class}</h4>
                <h4 class="{race}-text-new">{unit_name}</h4>
              </div>
              <div class="span2">
                <h4>{blueprint_id}</h4>
              </div>
            </div>
            <form method="POST" action="/contribute/submitScrn/{blueprint_id}" enctype="multipart/form-data" style="margin: 20px 0px;"/>
              <input type="file" name="userfile" />
              <input type="submit" value="Upload" class="feedback-button" />
            </form>
            <b><p>Max file size: 200kb</p>
            <p>Allowed file types: GIF, JPG, JPEG, PNG</p></b>
            <p>Uploaded images will be manually checked prior to inclusion. Abuse of the screenshot uploader will result in your account being disabled.</p>
            <p>Multiple submissions are encouraged!</p>
            
          </div>
          <div class="span2"></div>
        </div>



        
          <p></p>
          
          
        
      </div>


    </div>

    
</div>

    <div style="margin-bottom: 20px;"></div>
      
