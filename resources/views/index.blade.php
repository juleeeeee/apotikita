<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | ApotiKita</title>

	<link href="{{ asset('assets') }}/dist/css/bootstrap.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet">
</head>
<body>
<!-- Header -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">ApotiKita</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{ url('/') }}">Home</a></li>
	            <li><a href="{{ url('/obat') }}">Obat</a></li>
	            <li><a href="{{ url('/pegawai') }}">Pegawai</a></li>
	            <li><a href="{{ url('/pembayaran') }}">Transaksi</a></li>
	            <li>
	            	<form action="{{ url('logout') }}" method="POST">
	            		{{ csrf_field() }}
	            		<button class="btn btn-logout"><i class="fa fa-power-off"></i> Logout</button>
	            	</form>
	            </li>
          	</ul>
        </div>
  	</div>
</div>
<!-- Content -->
<div id="twrap">
 	<div class="container centered">
 		<div class="row">
 			<div class="col-lg-8 col-lg-offset-2">
	 			<br><br><br><br><br><br><br>
	 			<i class="fa fa-plus-square"></i>
		 		<div class="hline-w"></div>
	 			<h1><font size="7">Selamat Datang di ApotiKita</font></h1>
		 		<div class="hline-w"></div>
 			</div>
 		</div>
	</div>
</div>
<!-- Footer -->
<div id="footerwrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<center>
					<h4><strong> &copy; 2017 ApotiKita</strong></h4>
				</center>
			</div>
		</div>
	</div>
</div>
</body>
</html>