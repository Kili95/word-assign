<?php get_header();?>

<div class="row"  style="padding-top:10%;">
	<div class="col-md-12">
		<div class="card shadow">
			<div class="card-body">
				<h5 class="text-center mb-4">Contact Us</h5>
				<form>
					<div class="form-group">
					    <input type="text" class="form-control mandatory-field" id="name" placeholder="Name">
					</div>
				  	<div class="form-group">
					    <input type="email" class="form-control mandatory-field" id="email" placeholder="Email">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
				          	<select id="country_code" class="form-control mandatory-field">
				          		<option value="">-Country-</option>
					        	<option value="+93">Afghanistan(+93)</option>
					        	<option value="+54">Argentina(+54)</option>
					        	<option value="+880">Bangladesh(+880)</option>
					        	<option value="+1">Canada(+1)</option>
					        	<option value="+33">France(+33)</option>
					        	<option value="+91">India(+91)</option>
					        	<option value="+81">Japan(+81)</option>
					        	<option value="+92">Pakistan(+92)</option>
					        	<option value="+94">Sri Lanka(+94)</option>
					        	<option value="+44">United Kingdom(+44)</option>
					        	<option value="+1">United States(+1)</option>
					      	</select>
					    </div>
					    <input type="number" class="form-control mandatory-field" id="phone_number" placeholder="Phone Number">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control mandatory-field" id="company_name" placeholder="Company Name">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="company_website" placeholder="Company Website">
					</div>
					<div class="form-group">
					    <textarea class="form-control mandatory-field" id="description" rows="3" placeholder="Message"></textarea>
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
		var country_code = $("#country_code").val();
		var phone_number = $("#phone_number").val();
		var company_name = $("#company_name").val();
		var company_website = $("#company_website").val();
		var description = $("#description").val();
		var flag = 0;
		var mail_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

		$(".mandatory-field").each(function() {
		    var val = $(this).val();
		    var input_type = $(this).attr('type');

		    if(val == ""){
				flag = 1;
				$(this).css("border-color", "red");
			}else{
				if(input_type == 'email' && !mail_format.test(val)){
					flag = 1;
					$(this).css("border-color", "red");
				}else{
					$(this).css("border-color", "#ced4da");
				}
			}
		});
		

		var ajaxurl = "<?php echo admin_url('admin-ajax.php') ?>";
		var ajaxData = {'action' : 'contact_submit', 'name' : name, 'email' : email, 'country_code' : country_code, 'phone_number' : phone_number, 'company_name' : company_name, 'company_website' : company_website, 'description' : description};

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