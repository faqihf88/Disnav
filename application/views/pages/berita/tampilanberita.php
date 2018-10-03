<?php 
	$b=$data->row_array();
?>
<title><?php echo $b['berita_judul'];?></title>
<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row page-titles">
				<div class="col-md-5 col-8 align-self-center">
					<h3 class="text-themecolor">Dashboard</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>

			<div class="row">

				<div class="col-lg-8 col-md">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-12">
									<div itemprop="text" class="entry-content">
										<h2><?php echo $b['berita_judul'];?></h2><hr/>
										<img src="<?php echo base_url().'assets/images/Upload/'.$b['berita_image'];?>" class="img-fluid">
										<?php echo $b['berita_isi'];?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-4 col-md-5">
					<div class="card">
						<div class="card-body">
							<div class="col-12">
								< <form class="form-inline" action="<?php echo base_url('adminmenu/cari')?>" action="GET">
									<div class="form-group">
										<input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
									</div>
									<input class="btn btn-primary" type="submit" value="Cari">
								</form><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
