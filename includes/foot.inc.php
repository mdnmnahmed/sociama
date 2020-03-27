
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#toggle-sidebar').on('click',function(){
			$('#sidenav').slideToggle('slow', function() {
			    $(this).toggleClass('hide');
			  });
			$('#content').toggleClass('col-md-12 col-md-10');
		});
	});
	
 	setTimeout(function() {
	   $('#preloader').attr('hidden',true);
	   $('.body').removeAttr('hidden');
	},2000);

</script>
</body>
</html>