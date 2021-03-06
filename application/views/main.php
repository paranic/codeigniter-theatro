<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>≈ Theatrø ≈</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- datetimepicker -->
	<link href="/assets/bootstrap-datetimepicker-4.17.37/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Main Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,greek' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- Hotjar Tracking Code for theatro.quake.gr -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:103591,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<body>

	<div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">≈ Theatrø ≈</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
	                <a href="/logout">αποσύνδεση <i class="fa fa-sign-out fa-fw"></i></a>
                </li>
            </ul>


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a <?php if($this->uri->segment(1)=='dashboard'){?>class="active"<?php }?> href="/"><i class="fa fa-dashboard fa-fw"></i> Ταμπλό</a>
                        </li>

                        <li>
                            <a <?php if($this->uri->segment(1)=='theater'){?>class="active"<?php }?> href="/theater"><i class="fa fa-university fa-fw"></i> Θέατρα</a>
                        </li>

						<li>
                            <a <?php if($this->uri->segment(1)=='tickets'){?>class="active"<?php }?> href="/ticket"><i class="fa fa-ticket fa-fw"></i> Εισιτήρια</a>
                        </li>

                        <li>
                            <a <?php if($this->uri->segment(1)=='troupe'){?>class="active"<?php }?> href="/troupe"><i class="fa fa-users fa-fw"></i> Θίασοι</a>
                        </li>

                        <li>
                            <a <?php if($this->uri->segment(1)=='performance'){?>class="active"<?php }?> href="/performance"><i class="fa fa-child fa-fw"></i> Παραστάσεις</a>
                        </li>

						<li>
                            <a <?php if($this->uri->segment(1)=='statistics'){?>class="active"<?php }?> href="/statistics"><i class="fa fa-bar-chart-o fa-fw"></i> Στατιστικά</a>
                        </li>

                    </ul>
                </div>
            </div>

        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">

<?php if($this->session->flashdata('message')){?>
			<div class="alert alert-warning">
<?=$this->session->flashdata('message')?>
			</div>
<?php }?>

<?php if(isset($error_message)){?>
			<div class="alert alert-danger">
<?=$error_message?>
			</div>
<?php }?>

<?=$body?>

        </div>

    </div>

    <!-- jQuery -->
    <script src="/assets/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/assets/js/plugins/metisMenu/metisMenu.min.js"></script>

	<!-- Moment.js -->
	<script src="/assets/moment.js"></script>

	<!-- datetimepicker -->
	<script src="/assets/bootstrap-datetimepicker-4.17.37/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/assets/js/sb-admin-2.js"></script>

</body>

</html>
