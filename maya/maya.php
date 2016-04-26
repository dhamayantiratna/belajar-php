<!DOCTYPE html>
<html>
<body>
	<pre>
	<?php
		$harga = array("Acer"=>"1000","Asus"=>"2000","Lenovo"=>"3000");
		echo '<table border="1">';
					echo '<tr>';
						echo '<th>';
							echo 'Merk';
						echo '</th>';
						echo '<th>';
							echo 'Harga';
						echo '</th>';
					echo '</tr>';
		foreach($harga as $a => $b){
				echo '<td>'.$a.'</td>';
				echo '<td>'.$b.'</td>';
			echo '<tr>';
			echo '</tr>';
		}	
			echo '</table>';
			
		

		?>

</pre>
</body>
</html>
