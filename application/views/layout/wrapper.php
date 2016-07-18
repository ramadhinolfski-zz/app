<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layout/css'); ?>

	<body class="menubar-hoverable header-fixed">
<?php $this->load->view('layout/header'); ?>
		<div id="base">
		<!-- BEGIN CONTENT-->
<?php $this->load->view($isi);?>
<?php $this->load->view('layout/menu'); ?>
		</div>
		<!-- END CONTENT -->
<?php $this->load->view('layout/js'); ?>
	</body>
</html>