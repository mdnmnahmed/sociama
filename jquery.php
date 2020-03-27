<?php 
include 'includes/head.inc.php'; 
include 'includes/nav.inc.php'; 
?>




	<div class="container-fluid" style="margin-left: 0px !important; padding-left: 0px !important;">
		<div class="row">
			<?php include 'includes/sidenav.inc.php'; ?>
			<div class="col-md-12" id="content" style="padding: 0px !important;">
				<div class="bg-primary" style="min-height: 90vh;">
					<center>
					<p id="para" class="text-white">This is a paragraph</p>
					<button id="btn">Click me</button>
					</center>
					<script type="text/javascript">
						function logOut() {
							$.ajax({
								url:'logout.php'
							});
						}
						$(document).ready(function(){
							$(window).on('beforeunload',function(){
						      return logOut;
						    });
						});
					</script>
				</div>
			</div>
		</div>
	</div>



<?php include 'includes/foot.inc.php'; ?>