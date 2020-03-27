<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand ml-3" href="#"><span class="h4" title="Click to View Menu" id="toggle-sidebar">SOCIAMA</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navBar">
  	<ul class="navbar-nav mx-auto">
  		<li class="nav-item">
        <form action="search-output.php" method="get">
    			<div class="form-group mt-2">
    			  <div class="form-group">
    			    <div class="input-group mb-3">
    			      <input type="text" class="form-control" id="search_input" name="search_input" size="80">
    			      <div class="input-group-append">
    			        <button class="btn btn-primary"><i class="fa fa-search mr-1"></i>Search</button>
    			      </div>
    			    </div>
    			  </div>
    			</div>
        </form>
  		</li>
  	</ul>
  	<ul class="navbar-nav">
  		<li class="nav-item mr-3 mt-3"><a href="user-profile.php" style="text-decoration: none ;"><i class="fa fa-user-circle fa-lg text-white ml-3 mr-1"></i><span class="text-white h5">Soumodeep Ganguly</span></a></li>
  		<li class="nav-item mr-3 mt-3"><a href="logout.php" style="text-decoration: none ;"><i class="fa fa-power-off fa-lg text-white ml-3"></i><span class="text-white h5"> Logout</span></a></li>
  	</ul>
  </div>
</nav>