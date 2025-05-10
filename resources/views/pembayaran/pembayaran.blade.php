<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transaksi | ApotiKita</title>

	<link href="{{ asset('assets') }}/dist/css/bootstrap.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet">
</head>
<body>
<!- Header ->
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
	            <li><a href="{{ url('/pegawai') }}">Pegawai</a></li>
	            <li  class="active"><a href="{{ url('/pembayaran') }}">Transaksi</a></li>
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
<div id="twrapPem">
@include('feedback')
	<div class="col-md-12">
	<div class="row">
    	<div class="col-md-10 col-md-offset-1">
        	<div id="bayar">
            	<div class="content-box-large">
              		<div class="panel-heading">
                		<div class="panel-title"><h2>Data Pembayaran</h2></div>
                		 <div class="box-header with-border">
         <a href="{{ url('pembayaran/add') }}" class="btn btn-theme"><i class="fa fa-plus-circle"></i> Tambah</a>
       </div>
                			<div class="panel-body">
				                <table class="table">
				                	<thead>
				                    <tr bgcolor="Lightslategray">
				                      <th>No</th>
				                      <th>Tanggal</th>
                              <th>Nama Obat</th>
				                      <th>Harga</th>
				                      <th>Kuantitas</th>
				                      <th>Total</th>
                              <th>Nama Pegawai</th>
				                      <th></th>
				                    </tr>
				                  </thead>
				                  <tbody>
          @foreach($result as $row)
          <tr>
            <th>{{ !empty($i) ? ++$i : $i = 1 }}</th>
            <th>{{ @$row->tgl_bayar }}</th>
            <th>{{ @$row->obat->nama_obat }}</th>
            <th>{{ @$row->obat->harga_obat }}</th>
            <th>{{ @$row->kuantitas }}</th>
            <th>{{ @$row->total_bayar }}</th>
            <th>{{ @$row->pegawai->nama_pegawai }}</th>
            <td>
                <a href="{{ url('pembayaran/'. $row->no_bayar .'/edit') }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                 <a class="btn btn-danger" href="{{ url('pembayaran/'. $row->no_bayar .'/destroy') }}" style="display:inline;" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>
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