<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Obat | ApotiKita</title>

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
	            <li class="active"><a href="{{ url('/obat') }}">Obat</a></li>
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
<div id="twrapO">
@include('feedback')
	<div class="col-md-12">
	<div class="row">
    	<div class="col-md-10 col-md-offset-1">
        	<div id="obat">
            	<div class="content-box-large">
              		<div class="panel-heading">
                		<div class="panel-title"><h2>Data Obat</h2></div>
                		 <div class="box-header with-border">
          <a href="{{ url('obat') }}" class="btn btn-theme"><i class="fa fa-chevron-left"></i> Kembali</a></a>
       </div><br>
                			 <!-- Default box -->
      <div class="box">
 <div class="box-body">
  <form action="{{ empty($result) ? url('obat/add') : url("obat/$result->kode_obat/edit") }}" class="form-horizontal"  method="POST" >
  {{ csrf_field() }}

  @if (!empty($result))
    {{ method_field('patch') }}
  @endif
  <div class="col-md-11 col-md-offset-1">
  <div class="form-group">
    <label class="control-label col-sm-2">Nama Obat</label>
    <div class="col-sm-8">
    <input type="text" name="nama_obat" class="form-control" placeholder="Masukan Nama Obat" value="{{ @$result->nama_obat}}" />
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Jenis Obat</label>
    <div class="col-sm-4 pull-left">
      <div class="checkbox">
         <label class="pull-left"><input type="radio" name="jenis_obat" value="Tablet" {{ (@$result-> jenis_obat == 'Tablet' ? 'checked' : '') }} /> Tablet&nbsp&nbsp</label>
         <label class="pull-left"><input type="radio" name="jenis_obat" value="Kapsul" {{ (@$result-> jenis_obat == 'Kapsul' ? 'checked' : '') }} /> Kapsul&nbsp&nbsp</label>
         <label class="pull-left"><input type="radio" name="jenis_obat" value="Sirup" {{ (@$result-> jenis_obat == 'Sirup' ? 'checked' : '') }} /> Sirup</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Kategori</label>
    <div class="col-sm-8">
    <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="{{  @$result->kategori }}"/>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2">Harga</label>
    <div class="col-sm-8">
    <input type="text" name="harga_obat" class="form-control" placeholder="Masukan Harga" value="{{  @$result->harga_obat }}"/>
    </div>
</div>

  <div class="form-group">
    <label class="control-label col-sm-2">Stok</label>
    <div class="col-sm-2">
    <input type="text" name="stok" class="form-control" placeholder="Stok" value="{{ @$result->stok}}" />
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-10">
    <button type="submit" class="btn btn-theme pull-right"><i class="fa fa-save"></i> Simpan</button>
  </div>
</div>
</form>
  </div>
        <!-- /.box-body -->
        </div>
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