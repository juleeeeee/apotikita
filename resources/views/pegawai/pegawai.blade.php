<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pegawai | ApotiKita</title>

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
				<li><a href="{{ url('/') }}">Home</a></li>
	            <li><a href="{{ url('/obat') }}">Obat</a></li>
	            <li class="active"><a href="{{ url('/pegawai') }}">Pegawai</a></li>
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
<div id="twrapP">
@include('feedback')
	<div class="col-md-12">
	<div class="row">
    	<div class="col-md-10 col-md-offset-1">
        	<div id="pegawai">
            	<div class="content-box-large">
              		<div class="panel-heading">
                		<div class="panel-title"><h2>Data Pegawai</h2></div>
                		 <div class="box-header with-border">
                       <a href="{{ url('pegawai/add') }}" class="btn btn-theme"><i class="fa fa-plus-circle"></i> Tambah</a>
                     </div>
                			<div class="panel-body">
				                <table class="table">
				                	<thead>
				                    <tr bgcolor="Lightslategray">
				                      <th>No</th>
                              <th>Foto</th>
				                      <th>Nama Pegawai</th>
				                      <th>Jenis Kelamin</th>
				                      <th>Alamat</th>
				                      <th>Telepon</th>
				                      <th></th>
				                    </tr>
				                  </thead>
				                  <tbody>
          @foreach($result as $row)
          <tr>
            <th>{{ !empty($i) ? ++$i : $i = 1 }}</th>
            <th><img src="{{ asset('uploads/'.@$row->foto)}}" width="80px" class="img"></th>
            <th>{{ $row->nama_pegawai }}</th>
            <th>{{ $row->jk_display }}</th>
            <th>{{ $row->alamat }}</th>
            <th>{{ $row->notelp }}</th>
            <td>
                <a href="{{ url('pegawai/'. $row->id_pegawai .'/edit') }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                 <a class="btn btn-danger" href="{{ url('pegawai/'. $row->id_pegawai .'/destroy') }}" style="display:inline;" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
                </table>
              </div>
                </body>
              
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>