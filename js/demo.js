<script type="text/javascript">
 
  $(document).ready(function(){
 
    $("#isSelect").click(function () {
 
	// alert($('input:radio[name=answer1]:checked').val());
	if($('input:radio[name=answer1]:nth(0)').attr('checked',true)){
		alert('yes');
	}
 
    });
 
    $("#isSelect").click(function () {
 
		$('input:radio[name=answer1]:nth(0)').attr('checked',true);
		// $('input:radio[name=sex]')[0].checked = true;
			// alert('one');
			alert($('input[name=answer1]:checked', '#myForm')); 
	 
	});
 
    $("#isSelect").click(function () {
 
	$('input:radio[name=answer1]:nth(1)').attr('checked',true);
	//$('input:radio[name=sex]')[1].checked = true;
 
    });
 
    $("#selectUnknown").click(function () {
 
	$('input:radio[name=sex]:nth(2)').attr('checked',true);
	//$('input:radio[name=sex]')[2].checked = true;
 
    });
 
    $("#reset").click(function () {
 
	$('input:radio[name=sex]').attr('checked',false);
 
    });
 
  });
</script>