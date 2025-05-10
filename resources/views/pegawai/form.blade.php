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
          <a href="{{ url('pegawai') }}" class="btn btn-theme"><i class="fa fa-chevron-left"></i> Kembali</a></a>
       </div><br>
                			 <!-- Default box -->
      <div class="box">
 <div class="box-body">
  <form action="{{ empty($result) ? url('pegawai/add') : url("pegawai/$result->id_pegawai/edit") }}" class="form-horizontal"  method="POST" 
  enctype="multipart/form-data">
  {{ csrf_field() }}

  @if (!empty($result))
    {{ method_field('patch') }}
  @endif
  <div class="col-md-11 col-md-offset-1">
  <div class="form-group">
    <label class="control-label col-sm-2">Nama pegawai</label>
    <div class="col-sm-8">
    <input type="text" name="nama_pegawai" class="form-control" placeholder="Masukan Nama Pegawai" value="{{ @$result->nama_pegawai}}" />
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Jenis Kelamin</label>
    <div class="col-md-2 pull-left">
      <div class="checkbox">
        <label class="pull-left"><input type="radio" name="jk" value="L" {{ (@$result-> jk == 'L' ? 'checked' : '') }} /> Laki-laki</label><br />
        <label class="pull-left"><input type="radio" name="jk" value="P" {{ (@$result-> jk == 'P' ? 'checked' : '') }} /> Perempuan</label>
      </div>
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2">Alamat</label>
    <div class="col-sm-8">
    <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="{{  @$result->alamat }}"/></textarea>
    </div>
</div>

  <div class="form-group">
    <label class="control-label col-sm-2">Telepon</label>
    <div class="col-sm-3">
    <input type="text" maxlength="12" name="notelp" class="form-control obile-phone-number" placeholder="+62 000-0000-0000" value="{{ @$result->notelp}}" />
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Foto</label>
    <div class="col-sm-10">
      <input type="file" name="foto" />
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