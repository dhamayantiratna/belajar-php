<!DOCTYPE html>
<html>
<body>

	 	<?php
			$hero = array(
			
				array("nama"=>"OD","lane"=>"mid","tipe"=>"range", "Pro"=>true),
				array("nama"=>"WR","lane"=>"bot","tipe"=>"range","Pro"=>false),
				array("nama"=>"Zeus","lane"=>"top","tipe"=>"range","Pro"=>true)
			);

			?>

			<table border='1' style='width:100%'>
				<thead>
					<th>
						Nama
				</th>

					<th>
						Lane
					</th>

					<th>
						Tipe
					</th>

					<th>
						Pro
					</th>

					</thead>

				<?php
				foreach ($hero as $a):

				?>
						<tr>
							<td> <?php
					echo $a['nama'];  ?>
						</td>
							<td> <?php
					echo $a['lane']; ?>
							</td>
						<td> <?php
					echo $a['tipe']; ?>
						</td> 

						<td> <?php
					echo $a['Pro']; ?>
						</td> 

				</tr>
				
				<?php
				 endforeach;
				 ?>
			</table>

			

</body>
</html>