<script type="text/javascript" src="js/sample/jquery-1.3.2.min.js"></script>    
<script type="text/javascript" src="js/jquery-barcode.js"></script> 
<input type="button" onclick='$("#bcTarget").barcode("BLUE STRAP", "code39",{barWidth:2, barHeight:30});' value="CODE" id=watchButton   hidden>  
<div id="bcTarget">

</div>   
<script type="text/javascript">
    document.getElementById("watchButton").click();
</script>
