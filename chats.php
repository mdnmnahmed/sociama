<?php 
include 'includes/head.inc.php'; 
include 'includes/nav.inc.php'; 
?>





	<div class="container-fluid" style="margin-left: 0px !important; padding-left: 0px !important;">
		<div class="row">
			<?php include 'includes/sidenav.inc.php'; ?>
			<div class="col-md-12" id="content" style="padding: 0px !important;">
				<div class="bg-primary" style="min-height: 90vh;">
				
<!-- wrapper -->	
<div class="d-flex" id="wrapper">

 <!-- container -->
<div class="container-fluid" style="min-width: 80%;" id="chatz">
      	<!-- Chat Sidebar -->
				    <div class="bg-light border-right text-center" id="sidebar-wrapper">
				      <div class="h4" style="cursor: pointer;" id="toggle-friends"><i class="fa fa-comments mr-2"></i>Messages</div>
				      <div class="list-group list-group-flush" id="chats-friends">
				          <a href="#" id="friend" class="list-group-item list-group-item-action bg-dark">Soumodeep Ganguly<i class='fa fa-circle fa-xs text-success ml-3'></i></a>
				          <a href="#" id="friend" class="list-group-item list-group-item-action bg-dark">Soumita Dutta<i class='fa fa-circle fa-xs text-danger ml-3'></i></a>
				      </div>
				    </div>
				    <script type="text/javascript">
				    	$(document).ready(function(){
							$('#toggle-friends').on('click',function(){
								$('#chats-friends').slideToggle('slow', function() {
								    $(this).toggleClass('hide');
								  });
							});
							$('#chats-friends').on('click',function(){
								$('#page-content-wrapper').slideToggle('slow', function() {
									$(this).removeClass('hide');
								    $(this).show();						    
								  });
								$(this).hide();
							});
							if( location.href.match( 'friend') ){
								$('#page-content-wrapper').show();	
								$('#chats-friends').hide();
							}
						});
				    </script>
         <!-- Chat Box-->
           <!-- Page Content -->
			    <div class="hide" id="page-content-wrapper">

			        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				        
				        <!-- Typing area -->
				        <ul class="navbar-nav mx-auto">
  							<li class="nav-item">
					            <form action="chats.php?friend" id="message-form" class="bg-light" method="post">
					              <div class="input-group">
					                <input type="text" name="message" placeholder="Type a message" id="message" size="100" class="form-control rounded-0 border-0 py-4 bg-light">
					                <input type="text" name="friend" id="friend" value="" hidden>
					                <div class="input-group-append">
					                  <button id="send" name="send" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
					                </div>
					              </div>
					            </form> 
					        </li>
					    </ul> 
			        
			     	</nav>
			      
			<!-- Message Body -->
            <div class="col-12 px-0">
              <div class="px-4 py-5 chat-box bg-white">
                
                <!-- Your Message-->
                <div class="media w-50 ml-auto mb-3">
                  <div class="media-body">
                    <div class="bg-primary rounded py-2 px-3 mb-2">
                      <p class="text-small mb-0 text-white">Hi</p>
                    </div>
                    <p class="small text-muted" style="word-break: break-all;">12:30 | 12 Feb</p>
                  </div>
                </div>
                
                <!-- Friend's Message -->
                <div class="media w-50 mb-3"><img src="" alt="user" width="50" class="rounded-circle">
                 
		            <div class="media-body ml-3">
		                <div class="bg-dark rounded py-2 px-3 mb-2">
		                   <p class="text-small mb-0 text-white"  style="word-break: break-all; ">Hi everyone></p>
		                </div>
		                <p class="small text-muted">12:30 | 12 Jan</p>
		            </div>
             	</div> 

             	<!-- Your Message-->
               	<div class="media w-50 ml-auto mb-3">
		            <div class="media-body">
		                <div class="bg-primary rounded py-2 px-3 mb-2">
		                  <p class="text-small mb-0 text-white">How are you</p>
		                </div>
		                <p class="small text-muted" style="word-break: break-all;">12:30 | 12 Feb</p>
		            </div>
	            </div>

              </div>
            </div>
            <!-- Message Body Ends -->
          </div>
        <!-- Page Content Ends -->
		</div>
		<!-- container ends -->	       

    </div>
<!-- wrapper ends -->


  


				</div>
			</div>
		</div>
	</div>



<?php include 'includes/foot.inc.php'; ?>