<?php
/* Smarty version 3.1.30, created on 2019-10-26 21:21:15
  from "C:\wamp64\www\samanemvc-master1\src\view\upload\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5db4b8cb355bd1_85227978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ffe82243506df57e79076ddb71dcaeb3a7c67a3' => 
    array (
      0 => 'C:\\wamp64\\www\\samanemvc-master1\\src\\view\\upload\\index.html',
      1 => 1572124872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db4b8cb355bd1_85227978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
	-->
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
<!--
		
			<?php echo '<script'; ?>
 language=javascript>
			function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			}

			<?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu test page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu test get id page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu test list page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Upload/index">upload file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
PdfGenerator/generate">Samane Generate pdf file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/generate">Samane Generate excel file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/read">Samane read excel file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Email/sendMail">Samane Mailing </a></li>
			</ul>
		</div>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:160px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
							Merci, l'équipe samanemvc vous remercie :) : 
							je vous ai préparé un CRUD qui marche. Lisez la documentation.
							<br/>Et surtout noubliez pas de configurer votre base de données : ou? Dans le dossier config
							puis éditez le fichier database.php. Mettez à on l'etat de la base! Bon code!!!!  :)
					</div>
					<div id="design_js">MODELE DEVELOPPE PAR Ngor SECK ! <h1>Version 1.9.0 Doctrine ORM</h1></div>
				</div>
			</div>
		</div>
	</body>
</html>
-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <span class="logo-lg"><b>GESTION - STOCK</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i>En ligne </a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Produits</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
              <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">
                <i class="fa fa-circle-o"></i>Liste Produits
              </a>
            </li>
            <li class="active">
              <a href=""><i class="fa fa-circle-o"></i>Ajouter un produit
              </a>
            </li>
            <li class="active">
              <a href=""><i class="fa fa-circle-o"></i> Vendre un produit
              </a>
            </li>
          </ul>
        </li>
        <li class="active ">
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Upload/index">
            <i class="fa fa-file-pdf-o"></i><span>upload file</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
PdfGenerator/generate">
            <i class="fa fa-file-pdf-o"></i><span>Generate pdf file</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/generate">
            <i class="fa fa-file-excel-o"></i> <span>Generate excel file</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/read">
            <i class="fa fa-laptop"></i><span>read excel file</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Email/index">
            <i class="fa fa-envelope-open"></i><span>Mailing</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
	<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:15px;">
		<div class="panel panel-info">
			<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
			<div class="panel-body">
				<?php if (isset($_smarty_tpl->tpl_vars['uploadResult']->value)) {?>
					<div class="alert alert-warning">
						<?php echo $_smarty_tpl->tpl_vars['uploadResult']->value;?>

					</div>
				<?php }?>
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Upload/upload" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">selectionnez un fichier</label>
						<input class="form-control" required="true" type="file" name="fileName" id="fileName"/>
					</div>
					<div class="form-group">
						<input class="btn btn-success" type="submit" name="valider" value="SEND"/>
						<input class="btn btn-danger" type="reset" name="annuler" value="CANCEL"/>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1
    </div>
    <strong>Copyright &copy; MIO 2018 </strong> All rights reserved.
  </footer>

  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- jQuery UI 1.11.4 -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <?php echo '<script'; ?>
>
    $.widget.bridge('uibutton', $.ui.button);
  <?php echo '</script'; ?>
>
  <!-- Bootstrap 3.3.7 -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <!-- Morris.js charts -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/raphael/raphael.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/morris.js/morris.min.js"><?php echo '</script'; ?>
>
  <!-- Sparkline -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
  <!-- jvectormap -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
  <!-- jQuery Knob Chart -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/jquery-knob/dist/jquery.knob.min.js"><?php echo '</script'; ?>
>
  <!-- daterangepicker -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/moment/min/moment.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/bootstrap-daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
  <!-- datepicker -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
  <!-- Bootstrap WYSIHTML5 -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
  <!-- Slimscroll -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
  <!-- FastClick -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bower_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>
  <!-- AdminLTE App -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
  <!-- AdminLTE for demo purposes -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dist/js/demo.js"><?php echo '</script'; ?>
>
</div>
</body>
</html><?php }
}
