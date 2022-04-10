<?php get_header();?>

<div class="row"  style="padding-top:10%;">
	<div class="col-md-12">
		<div class="card shadow">
			<div class="card-body">
				<h5 class="text-center mb-4">Contact Us</h5>
				<form>
					<div class="form-group">
					    <input type="text" class="form-control" id="name" placeholder="Name">
					</div>
				  	<div class="form-group">
					    <input type="email" class="form-control" id="email" placeholder="Email">
					</div>
					<div class="form-group">
					    <textarea class="form-control" id="description" rows="3" placeholder="Description"></textarea>
				  	</div>
				  	<hr>
				  	<div class="form-group">
				  		<button type="submit" class="btn btn-primary mb-2 float-right" id="contact_us">Contact Us</button>
				  	</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
<script type="text/javascript">
jQuery(document).ready(function($){
	$(document).on("click", "#contact_us", function(evt){
		evt.preventDefault();

		var name = $("#name").val();
		var email = $("#email").val();
		var description = $("#description").val();
		var flag = 0;

		$(".form-control").each(function() {
		    var val = $(this).val();
		    if(val == ""){
				flag = 1;
				$(this).css("border-color", "red");
			}else{
				$(this).css("border-color", "#ced4da");
			}
		});
		

		var ajaxurl = "<?php echo admin_url('admin-ajax.php') ?>";
		var ajaxData = {'action' : 'contact_submit', 'name' : name, 'email' : email, 'description' : description};

		if(flag == 0){
			$.ajax({
			  	url : ajaxurl,
			  	type : 'post',
			  	data : ajaxData,
			  	beforeSend: function(){
			  		$("#contact_us").prop('disabled', 'true');
			  	},
			  	error : function (response){
			    	console.log(response);
			  	},
			  	success : function(response){
			    	$(".form-control").each(function() {
			    		$(this).val("");
			    	}); 
			  		$("#contact_us").removeAttr('disabled');
			    	alert("Data submitted successfully. Admin will contact you soon.");
			  	}
			  
			});
		}
	});
});
</script>