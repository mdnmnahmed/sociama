<?php 
include 'includes/head.inc.php';
?>
<!-- Preloader -->
	<div class="jumbotron vertical-center" id="preloader">
	  <div class="container">
	    <div class="text-center">
	      <div class="spinner-grow text-primary slow" style="width: 100px; height: 100px;">
	        
	      </div>
	    </div>
	  </div>
	</div>

	<div class="body" hidden>

<?php 
include 'includes/nav.inc.php'; 
?>




	<div class="container-fluid" style="margin-left: 0px !important; padding-left: 0px !important;">
		<div class="row">
			<?php include 'includes/sidenav.inc.php'; ?>
			<div class="col-md-12" id="content" style="padding: 0px !important;">
				<div class="bg-primary" style="min-height: 90vh;">
					<!-- All Content Will Go Here
					|
					|<div class="row">
					|
					|
					|
					|</div>
					|
					Contents -->
				</div>
			</div>
		</div>
	</div>



<?php include 'includes/foot.inc.php'; ?>