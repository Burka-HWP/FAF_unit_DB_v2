<div class="content-wrapper-inner">
    <div class="content-block welcome-block credits">           
        <h1 class="electrolize">Unit Comparerer...er......er v1.0</h1>
        <form action="/compare/compareUnits" method="post">
            <div class="row-fluid">
                <div class="span6 compare-unit">
                    <h2 class="electrolize center">Unit 1</h2>
                    {unit1}               
                </div>
                <div class="span6 compare-unit">            
                    <h2 class="electrolize center">Unit 2</h2>
                    {unit2}              
                </div>
            </div>
            <br />
            <div class="row-fluid">
                <div class="span3"></div>
                <div id="step5" class="span6 compare-unit center" style="visibility: hidden;">
                    <h4><span class="electrolize">Step 5: </span> Compare, muthafucka!</h4>
                    <button class="compare-button" type="submit" text="Submit">Compare!</button>
                    <h2 onclick="test()">Test</h2>
                </div>
                <div class="span3"></div>
                
            </div>
            
            
            
        </form>        
    </div>
</div>

{script}
