<div class="content-wrapper-inner">
    <div class="content-block welcome-block credits">           
        <h2 class="electrolize">Unit Comparerer...er......er v1.0</h2>
        <form action="/compare/compareUnits" method="post">
            <div class="row-fluid">
                <div class="span6 compare-unit">
                    <h3 class="electrolize center">Unit 1</h3>
                    {unit1}               
                </div>
                <div class="span6 compare-unit">            
                    <h3 class="electrolize center">Unit 2</h3>
                    {unit2}              
                </div>
            </div>
            <button class="btn btn-primary {css_extras}" type="submit" text="Submit">Compare!</button>
        </form>        
    </div>
</div>

{script}
