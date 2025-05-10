<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transaksi | ApotiKita</title>

	<link href="{{ asset('assets') }}/dist/css/bootstrap.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet">

    <script>
      
      function startCalc(){
        interval = setInterval("calc()",1);
      }
      
      function calc(){
        jual = document.autoSum.abc.value;
        banyak = document.autoSum.kuantitas.value;
        document.autoSum.total_bayar.value = jual*banyak;
      }

      function stopCalc(){
        clearInterval(interval);
      }
      }
      </script>

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
	            <li><a href="{{ url('/pegawai') }}">Pegawai</a></li>
	            <li class="active"><a href="{{ url('/pembayaran') }}">Transaksi</a></li>
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
                		<div class="panel-title"><h2>Data Transaksi</h2></div>
                		 <div class="box-header with-border">
          <a href="{{ url('pembayaran') }}" class="btn btn-theme"><i class="fa fa-chevron-left"></i> Kembali</a></a>
       </div><br>
                			 <!-- Default box -->
      <div class="box">
 <div class="box-body">
  <form name="autoSum" action="{{ empty($result) ? url('pembayaran/add') : url("pembayaran/$result->no_bayar/edit") }}" class="form-horizontal"  method="POST" >
  {{ csrf_field() }}

  @if (!empty($result))
    {{ method_field('patch') }}
  @endif
  <div class="col-md-11 col-md-offset-2">
  <div class="form-group">
    <label class="control-label col-sm-2">Tanggal</label>
    <div class="col-sm-5">
    <input type="date" name="tgl_bayar" class="form-control" placeholder="Masukan Tanggal ( Contoh : 2017-01-01 )" value="{{ @$result->tgl_bayar}}" />
    </div>
  </div>
<div class="form-group">
  <label class="control-label col-sm-2">Obat</label>
  <div class="col-sm-5">
    <select name="kode_obat" class="form-control">
    <option>--- Pilih Obat ---</option>
      @foreach (\App\Obat::all() as $obat)
        <option name="bebas" value="{{ $obat->kode_obat }}" {{@$result->kode_obat == $obat->kode_obat ? 'selected' : ''}}> {{ $obat->nama_obat}}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2">Harga</label>
  <div class="col-sm-5">
    <select name="dh" class="form-control" >
    <option>--- Harga Obat ( Sesuai Urutan Obat ) ---</option>
      @foreach (\App\Obat::all() as $obat)
        <option name="abc" onfocus="startCalc();" onblur="stopCalc();" value="{{ $obat->kode_obat }}" {{@$result->kode_obat == $obat->kode_obat ? 'selected' : ''}}> {{ $obat->harga_obat}}</option>
      @endforeach
    </select>
  </div>
</div>

  <div class="form-group">
    <label class="control-label col-sm-2">Kuantitas</label>
    <div class="col-sm-5">
    <input type="text" name="kuantitas" class="form-control" placeholder="Masukan Jumlah Obat" value="{{ @$result->kuantitas}}" onfocus="startCalc();" onblur="stopCalc();" />
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Total</label>
    <div class="col-sm-5">
    <input type="text" name="total_bayar" class="form-control" placeholder="Untuk Total Kuantitas * harga obat" value="{{ @$result->total_bayar}}" onchange="tryNumberFormat(this.form.onceBox);" />
    </div>
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2">Pegawai</label>
  <div class="col-sm-5">
    <select name="id_pegawai" class="form-control">
    <option>--- Pilih Pegawai ---</option>
      @foreach (\App\Pegawai::all() as $pegawai)
        <option value="{{ $pegawai->id_pegawai }}" {{@$result->id_pegawai == $pegawai->id_pegawai ? 'selected' : ''}}> {{ $pegawai->nama_pegawai}}</option>
      @endforeach
    </select>
  </div>
</div>
</div>
<div class="form-group">
  <div class="col-md-8 col-md-offset-2">
    <button type="submit" class="btn btn-theme"><i class="fa fa-save"></i> Simpan</button>
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