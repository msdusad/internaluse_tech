<footer>
  <div class="pull-right"> Techvedic - Admin Panel </div>
  <div class="clearfix"></div>
</footer>
 <script src="../js/jquery.min.js"></script>
 <script src="../js/select.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/nprogress.js"></script>
<script src="../js/tab.js"></script> 
<script src="../js/prettify.js"></script> 
<script src="../js/select2.full.min.js"></script> 
<script src="../js/custom.min.js"></script>
<script src="../js/register.js"></script>
<script src="../js/users/profile.js"></script>
<script src="../js/validate.min.js"></script>
<script>
      $(function() {
	  $(document).on('change', ':file', function() {
		var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	  });

	  $(document).ready( function() {
		  $(':file').on('fileselect', function(event, numFiles, label) {

			  var input = $(this).parents('.input-group').find(':text'),
				  log = numFiles > 1 ? numFiles + ' files selected' : label;

			  if( input.length ) {
				  input.val(log);
			  } else {
				  if( log ) alert(log);
			  }

		  });
	  });
	  
	});
</script>
<script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: " ",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
$(document).ready(function(){
    $("#click_to_hide").click(function(){
        $("#click").hide();
		$("#click_to_hide").hide();
		$("#password").show();
		$("#cancel").show();
    });
	 $("#cancel").click(function(){
        $("#password").hide();
		$("#click_to_hide").show();
		$("#click").show();
		$("#cancel").hide();
    });
});
 </script>
	

