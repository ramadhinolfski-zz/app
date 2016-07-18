<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('static/css'); ?>
<?php $this->load->view('static/header'); ?>
	<body class="header-fixed full-content">
		<!-- BEGIN BASE-->
		<div id="base">
<?php $this->load->view('static/content'); ?>
		</div>
		<!-- END BASE -->
<?php $this->load->view('static/js'); ?>
	</body>
</html>