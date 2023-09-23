	<!-- nouvelle new du presoident -->
	<div class="boite12"> 
		<?php include $liens["dirlien"].$liens["dirtxt"].$affichtxt["acc1"].$lp?>	
	</div>
<div class="row">
	<div class="col"> <!-- robotique-->
		<div class="carte">
			<h5>
				<?php 
					include $liens["dirlien"].$liens["dirtxt"].$liens["svg_1"].$lp;
					echo " ".$affichtxt["trt_acc2"];
				?>
			</h5>
				<?php include $liens["dirlien"].$liens["dirtxt"].$affichtxt["acc2"].$lp?>			
			<footer>
				<a href="<?php echo $liens["lien_pg4"]; ?>">
					<?php echo $liens["txtbtn1"];?>
				</a>
			</footer>
		</div>
	</div>
	<div class="col"> <!-- programmation -->
			<div class="carte">
				<h5>
					<?php 
						include $liens["dirlien"].$liens["dirtxt"].$liens["svg_1"].$lp;
						echo " ".$affichtxt["trt_acc3"];
					?>
				</h5>
					<?php include $liens["dirlien"].$liens["dirtxt"].$affichtxt["acc3"].$lp?>	
				<footer>
					<a href="<?php echo $liens["lien_pg2"]; ?>" role="button">
						<?php echo $liens["txtbtn1"];?>
					</a>
				</footer>
			</div>
	</div>

	<div class="col"> <!-- bricolage -->
			<div class="carte">
				<h5>
					<?php 
						include $liens["dirlien"].$liens["dirtxt"].$liens["svg_1"].$lp;
						echo " ".$affichtxt["trt_acc4"];
					?>
				</h5>
				<?php include $liens["dirlien"].$liens["dirtxt"].$affichtxt["acc4"].$lp?>	
				<footer>
					<a href="<?php echo $liens["lien_pg3"]; ?>" role="button">
						<?php echo $liens["txtbtn1"];?>
					</a>
				</footer>
	</div>

	</div>
		<div class="col"> <!-- art electro -->
			<div class="carte">
				<h5>
					<?php 
						include $liens["dirlien"].$liens["dirtxt"].$liens["svg_1"].$lp;
						echo " ".$affichtxt["trt_acc5"];
					?>
				</h5>
					<?php include $liens["dirlien"].$liens["dirtxt"].$affichtxt["acc5"].$lp?>	
				<footer>
					<a href="<?php echo $liens["lien_pg5"]; ?>" role="button">
						<?php echo $liens["txtbtn1"];?>
					</a>
				</footer>
			</div>
	</div>
</div>
 