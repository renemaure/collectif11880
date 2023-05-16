<div class="row">
    <div class="col-8 blog-main">
	<?php include $affasi ?>
	</div>
	<aside class="col-4">
		<div class="shadow p-4 mb-3 bg-light rounded">
			<h4 class="font-italic coul-bord">Le mot du président</h4>
			<p class="text-justify mb-0">
				<?php include $liens["dirtxt"]."mot_president".$lp ?>
			</p>
			<p class="text-right">
				<span>Le président</span>
			</p>
		</div>
	<div class="shadow p-4  mb-3 bg-light rounded">
			<h4 class="font-italic lvd">Activités</h4>
				<ol class="list-unstyled mb-0">
					<li>
						<a href="<?php echo $liens["lien_pg6"]?>"><?php echo $liens["trt_menu6"]?></a>
					</li>
					<li>
						<a href="#">Projet X</a>
					</li>
				</ol>	
			</h4>
		</div>
	<div class="shadow p-4  mb-3 bg-light rounded">
			<h4 class="font-italic lvd">projet en 2021</h4>
				<ol class="list-unstyled mb-0">
					<li>
						<a href="#">Assistant trop personel</a>
					</li>
				</ol>	
			</h4>
		</div>
	<div class="shadow p-4  mb-3 bg-light rounded">
			<h4 class="font-italic lvd">Archives</h4>
				<ol class="list-unstyled mb-0">
					<li>
						<a href="<?php echo $liens["lien_pg9"]?>"><?php echo $liens["trt_menu9"]?></a>
					</li>
				</ol>	
			</h4>
		</div>
	</aside><!-- /.blog-sidebar -->
</div>