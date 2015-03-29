<div class="content-wrapper-show {race}-view">
	<div class="correction-box">
          <h4>Correction</h4>
          <div class="correction-window">
            <img src="/assets/images/popups/correction.png"/>
            <p style="color: #aaa;">Notice something wrong? Let us know! - <span id="correction-ta-counter">Chars: 140</span></p>
            <div class="row-fluid">
            	<div class="span1">
            		<img src="/assets/images/layout/{race}.png" />
            	</div>
            	<div class="span11">
            		<p>
            			{c_unit_class} - {c_blueprint_id}<br />
            			<span class="{race}-text-new" style="font-size: 20px;">{c_unit_name}</span>            			
            		</p>
            	</div>
            </div>
            <form action="/correction/submit" method="POST">
              <textarea id="correction-ta" name="correction" class="feedback-textarea" style="height: 50px;" placeholder="Tell us!" maxlength="140"></textarea>
              <input type="submit" value="Submit" class="feedback-button"/>  
            </form> 
          </div>
        </div>
	<div class="table-block {race}-border">
	<!-- basic info partial -->
		{basic_info}
	</div>
	<div class="table-block {race}-border">
		<img src="/assets/images/show/unit-spec.png"/>
<hr style="margin-bottom: 20px;"/>
		<div class="row-fluid">
			<div class="span5">
				<!-- unit-specific attributes partial -->
				{unit_spec_info}
			</div>
			<div class="span7">
			    <!-- veterancy info partial-->
				{veterancy}
			</div>
		</div>



	 
	{attacks}
<!--
	 defenses partial 
	{defenses}-->
	
	 
	{enhancements}
	</div>
</div>




