<!DOCTYPE html>
<html>
<body>
	<pre>
	<?php
		$barang = array(
					array("Laptop","Acer"),
					array("Mouse","Razer"),
					array("Keyboard","Genius")
					);
		
		rsort($barang);
		print_r ($barang);	
		
	?> 
</pre>
</body>
</html>