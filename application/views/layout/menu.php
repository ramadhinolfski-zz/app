<div id="menubar" class="menubar-inverse ">
	<div class="menubar-fixed-panel">
		<div>
			<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="expanded">
			<a href="../../html/dashboards/dashboard.html">
				<span class="text-lg text-bold text-primary ">ADMIN MENU</span>
			</a>
		</div>
	</div>
	<div class="menubar-scroll-panel">

		<!-- BEGIN MAIN MENU -->
		<ul id="main-menu" class="gui-controls">

		<!-- BEGIN DASHBOARD -->
			<li>
				<a  class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>" href="<?=base_url('dashboard')?>">
					<div class="gui-icon"><i class="md md-home"></i></div>
					<span class="title">Dashboard</span>
				</a>
			</li><!--end /menu-li -->
			<!-- END DASHBOARD -->

			<!-- BEGIN Akademik -->
			<li class="gui-folder">
				<a>
					<div class="gui-icon"><i class="fa fa-book"></i></div>
					<span class="title">Akademik</span>
				</a>
				<!--start submenu -->
				<ul>
					<li><a class="<?php if($this->uri->segment(1)=="siswa"){echo "active";}?>" href="<?=base_url('siswa')?>" ><span class="title">Siswa</span></a></li>
					<li><a class="<?php if($this->uri->segment(1)=="pelajaran"){echo "active";}?>" href="<?=base_url('pelajaran')?>" ><span class="title">Pelajaran</span></a></li>
					<li><a class="<?php if($this->uri->segment(1)=="nilai"){echo "active";}?>" href="<?=base_url('nilai')?>" ><span class="title">Nilai</span></a></li>
				</ul><!--end /submenu -->
			</li><!--end /menu-li -->
			<!-- END Akademik -->

			<!-- Begin Instruktur -->
			<li class="gui-folder">
				<a>
					<div class="gui-icon"><i class="fa fa-users"></i></div>
					<span class="title">Kepegawaian</span>
				</a>
				<!-- start submenu -->
				<ul>
					<li><a class="<?php if($this->uri->segment(1)=="dataInstruktur"){echo "active";} ?>" href="<?=base_url('dataInstruktur');?>"><span class="title">Data Instruktur</span></a></li>
					<li><a class="<?php if($this->uri->segment(1)=="dataTU"){echo "active";} ?>" href="<?=base_url('dataTU');?>"><span class="title">Data Tata Usaha</span></a></li>
				</ul>
			</li>

			<!-- Begin Sarpras -->
			<li class="gui-folder">
				<a>
					<div class="gui-icon"><i class="fa fa-institution"></i></div>
					<span class="title">Sarana Prasarana</span>
				</a>
				<!-- start submenu -->
				<ul>
					<li><a class="<?php if($this->uri->segment(1)=="dataAlat"){echo "active";}?>" href="<?=base_url('dataAlat');?>"><span class="title">Data Alat</span></a></li>
					<li><a class="<?php if($this->uri->segment(1)=="dataRuangan"){echo "active";}?>" href="<?=base_url('dataRuangan');?>"><span class="title">Data Ruangan</span></a></li>
				</ul>
			</li>

		</ul><!--end .main-menu -->
		<!-- END MAIN MENU -->

		<div class="menubar-foot-panel" align="center">
			<small class="no-linebreak hidden-folded">
				<strong class="opacity-75"><i class="fa fa-code"></i> with <i class="fa fa-heart"></i> for <i class="fa fa-globe"></i></strong><br>
				<span>2016 - <?php echo date('Y'); ?></span>
			</small>
		</div>
	</div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->