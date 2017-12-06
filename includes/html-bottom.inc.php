<footer>
	<p>Stephanie Tran <?php  echo date("Y");  ?> &copy;</p>
</footer>
</main>
</div>

<!-- scripts -->
<script src="js/main.js" type="text/javascript"></script>
<script src="js/jquery.transit.min.js" type="text/javascript"></script>
<script src="https://use.fontawesome.com/b0dba73639.js"></script>
<script>
	$(window).load(function(){
	$('main').transition({ x: '0px', delay:800 }, 2000, 'snap');
	$('#loader').setTimeout(() => {
	hide(); 
	}, 3000);
	});
</script>
</body>
</html>