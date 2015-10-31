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

<body>

	<div id="wrapper">

        <!-- Navigation -->
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
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
	                <a href="/logout">αποσύνδεση <i class="fa fa-sign-out fa-fw"></i></a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a <?if($this->uri->segment(1)=='dashboard'){?>class="active"<?}?> href="/"><i class="fa fa-dashboard fa-fw"></i> Ταμπλό</a>
                        </li>

                        <li>
                            <a <?if($this->uri->segment(1)=='theater'){?>class="active"<?}?> href="/theater"><i class="fa fa-university fa-fw"></i> Θέατρα</a>
                        </li>

						<li>
                            <a <?if($this->uri->segment(1)=='tickets'){?>class="active"<?}?> href="/ticket"><i class="fa fa-ticket fa-fw"></i> Εισιτήρια</a>
                        </li>

                        <li>
                            <a <?if($this->uri->segment(1)=='troupe'){?>class="active"<?}?> href="/troupe"><i class="fa fa-users fa-fw"></i> Θίασοι</a>
                        </li>

                        <li>
                            <a <?if($this->uri->segment(1)=='performance'){?>class="active"<?}?> href="/performance"><i class="fa fa-child fa-fw"></i> Παραστάσεις</a>
                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">

<?if($this->session->flashdata('message')){?>
		<div class="alert alert-warning">
<?=$this->session->flashdata('message')?>
		</div>
<?}?>

<?if(isset($error_message)){?>
		<div class="alert alert-danger">
<?=$error_message?>
		</div>
<?}?>

<?=$body?>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
