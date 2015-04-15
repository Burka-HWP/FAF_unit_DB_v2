
<div class="content-block" style="position: relative;">   
    <div style="display: block; position: absolute; top: 0px; right: 0px; width: 300px;">
        <h3 id="welcome" class="all-text-new center" style="font-size: 20px;">units to compare:</h3>
        <div class="row-fluid">
            <div class="span4">
                <img id="choose2" class="choose-unselected" src="/assets/images/compare/2.png" onclick="setCompareCount(2)" />
            </div>
            <div class="span4">
                <img id="choose3" class="choose-unselected" src="/assets/images/compare/3.png" onclick="setCompareCount(3)" />
            </div>
            <div class="span4">
                <img id="choose4" class="choose-selected" src="/assets/images/compare/4.png" onclick="setCompareCount(4)" />
            </div>
        </div>
       
    </div>
    <div class="row-fluid">
        <div class="span12 center">
            <img src="/assets/images/layout/faf_welcome.png" class="race-title-image" />
        </div>            
    </div>

    <div class="row-fluid category black-bg">            
        <div class="span12">
            <h3 id="welcome" class="home-text-new" style="font-size: 30px;">Unit Comparison</h3>
        </div>                       
    </div>  
    

    <div class="row-fluid">
      <div class="span12">
            <div class="row-fluid">
                <div id="unit1_wrapper" class="race-block" style="visibility: visible;">
                    <div class="row-fluid">
                        <div class="span12 compare-unit">
                            <h2 class="all-text-new center">Unit 1</h2>
                            {unit1}               
                        </div>
                    </div>
                </div>
                <div id="unit2_wrapper" class="race-block" style="visibility: visible;">
                    <div class="row-fluid">
                        <div class="span12 compare-unit">
                            <h2 class="all-text-new center">Unit 2</h2>
                            {unit2}               
                        </div>
                    </div>
                </div>
                <div id="unit3_wrapper" class="race-block" style="visibility: visible;">
                    <!-- <div class="blockout"></div> -->
                    <div class="row-fluid">
                        <div class="span12 compare-unit">
                            <h2 class="all-text-new center">Unit 3</h2>
                            {unit3}               
                        </div>
                    </div>
                </div>
                <div id="unit4_wrapper" class="race-block" style="visibility: visible;">
                    <div class="row-fluid">
                        <div class="span12 compare-unit">
                            <h2 class="all-text-new center">Unit 4</h2>
                            {unit4}               
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <p id="loading" class="center">
                Unit Comparison Loading...
                <img src="/assets/images/admin/progress.gif" style="height: 25px; width: auto; display: inline-block; margin: 5px;" />
            </p>
            <p class="center"><a id="compare-link" href=""></a></p>               
            
       </div>
    </div>    
</div>

    <div style="margin-bottom: 20px;"></div>
      


        