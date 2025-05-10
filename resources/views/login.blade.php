<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | ApotiKita</title>

	<link href="{{ asset('assets') }}/dist/css/bootstrap.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet">
</head>
<body>
<!-- Content -->
<div id="twrapL">
@include('feedback')
	<div class="col-md-8">
		<div class="row">
	    	<div class="col-md-6 col-md-offset-6">
	        	<div id="login">
	            	<div class="content-box-large">
	              		<div class="panel-heading">
	                		<div class="panel-title">
	                			<center>
	                				<p><i class="fa fa-plus-square"></i> ApotiKita</p>
	                			</center>
	                		</div>
	                		<div class="panel-body"><div class="hline-w"></div>
	                			<form class="form-horizontal" method="POST" action="{{ url('/login')}}">
	                			{{ csrf_field() }}
	                			
									<div class="form-group">
										<div class="col-md-10 col-md-offset-1">
											<h3>Username</h3>
											<input class="form-control" maxlength="12" type="username" name="username" placeholder="Username" />
											<h3>Password</h3>
											<input class="form-control" type="password" name="password" placeholder="Password" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-10 col-md-offset-1">
											<input type="submit" class="btn btn-theme pull-right" value="Login"></input>
										</div>
									</div>
								</form>
								<div class="hline-w"></div>
								<center>
									<h5><strong> &copy; 2017 ApotiKita</strong></h5>
								</center>
	              			</div>
	              		</div>
	            	</div>
	          	</div>
	        </div>
	    </div>
   	</div>
</div>
</body>
</html>