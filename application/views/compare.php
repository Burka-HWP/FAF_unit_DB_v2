<form action="/compare/compareUnits" method="post">
<div class="content-wrapper-inner compare-gap-top">
    <div class="content-block welcome-block credits">
        <div class="row-fluid">
            <div class="span4">
                <h1 class="electrolize">Unit Comparer v1.0</h1> 
                <p>Multiple compare coming soon (or eventually)!</p>
            </div>
            <div class="span2 align-right">
                <h4>Compare<br /># of units</h4>
            </div>
            <div class="span1 center"><img class="compare-selected" src="/assets/images/compare/2.png" /></div>
            <div class="span1 center"><img class="compare-unselected" src="/assets/images/compare/3_no.png" /></div>
            <div class="span1 center"><img class="compare-unselected" src="/assets/images/compare/4_no.png" /></div>
            <div class="span3 center">
                <button id="step5" class="compare-button" type="submit" text="Submit" style="visibility: hidden;">Compare!</button>
            </div>
        </div>
    </div>
</div>

        
            <div class="row-fluid">
                <div id="unit1_wrapper" class="span6 compare-unit-wrapper">
                    <div class="row-fluid">
                        <div class="span12 compare-unit">
                            <h2 class="electrolize center">Unit 1</h2>
                            {unit1}               
                        </div>
                    </div>
                </div>
                <div id="unit2_wrapper" class="span6 compare-unit-wrapper">
                    <div class="row-fluid">
                        <div class="span12 compare-unit">
                            <h2 class="electrolize center">Unit 2</h2>
                            {unit2}               
                        </div>
                    </div>
                </div>
            </div>
            <br />
            
        </form> 