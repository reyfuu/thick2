
  <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Thick</span>
        </a>

				 <ul class="navbar-nav align-self-stretch">
	 
<li class="sidebar-header">
					</li>
	<li class=""> 
		  <a class="nav-link text-left <?php if($title == 'Dashboard'){ echo 'active';} ?>" href="<?= base_url('mahasiswa'); ?>" role="button" 
		  aria-haspopup="true" aria-expanded="false">
       <i class="flaticon-bar-chart-1"></i>  Dashboard
         </a>
		  </li>
	 
       <li class="has-sub"> 
		  <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>   Proyek
         </a>
		  <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box"> 
										<ul class="list-unstyled m-0">
											<li><a href="<?= base_url('/mahasiswa/register-project');?>">Register Project</a></li>
											<li><a href="">Kemajuan Proyek</a></li>
										    <li><a href=""> Laporan Proyek</a></li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
		     </div>
		  </div>
		  </li>
		  <li class=""> 
		  <a class="nav-link text-left" href="<?= base_url('/keluar');?>"  role="button" >
       <i class="flaticon-bar-chart-1"></i>  Keluar
         </a>
		  </li>
		  </ul>
			</div>
    </nav>