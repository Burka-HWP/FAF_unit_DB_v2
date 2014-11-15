<script type="text/javascript">
    function unit1_raceChange($race) {        
        switch ($race) {
            case 'Aeon':
                document.getElementById("unit1_aeon").setAttribute("class", "compare-selected");
                break;
            case 'Cybran':
                alert('unit1 ' + $race);
                break;
            case 'UEF':
                alert('unit1 ' + $race);
                break;
            case 'Seraphim':
                alert('unit1 ' + $race);
                break;
        }        
    }
    function unit2_raceChange($race) {        
        switch ($race) {
            case 'Aeon':
                alert('unit2 ' + $race);
                break;
            case 'Cybran':
                alert('unit2 ' + $race);
                break;
            case 'UEF':
                alert('unit2 ' + $race);
                break;
            case 'Seraphim':
                alert('unit2 ' + $race);
                break;
        }        
    }

</script>
