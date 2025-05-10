<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Pembayaran::all();
    	return view('pembayaran/pembayaran')->with($data);
    }

      public function create()
	{
		return view('pembayaran/form');
	}

	public function store(Request $request)
	{
		$rules = [
			'tgl_bayar'	=> 'required',
			'kode_obat'		=> 'exists:t_obatt',
			'kuantitas'	=> 'required',
			'total_bayar'		=> 'required',
			'id_pegawai'	=> 'exists:t_pegawaii'
		];
		$this->validate($request, $rules);

		$input = $request->all();
		$status = \App\Pembayaran::create($input);

		if ($status) return redirect('pembayaran')->with('success', 'Data Berhasil ditambahkan');
		else return redirect('pembayaran')->with('error', 'Data Gagal ditambahkan');
	}

	public function edit($id)
	{
		$data['edit'] = true;
		$data['result'] = \App\Pembayaran::where('no_bayar', $id)->first();
		return view('pembayaran/form')->with($data);
	}

	public function update(Request $request, $id)
	{
		$rules = [
			'tgl_bayar'	=> 'required',
			'kode_obat'		=> 'required|exists:t_obatt',
			'kuantitas'	=> 'required',
			'total_bayar'		=> 'required',
			'id_pegawai'	=> 'required|exists:t_pegawaii',
		];
		$this->validate($request, $rules);

		$input = $request->all();
		$result = \App\Pembayaran::where('no_bayar', $id)->first();
		$status = $result->update($input);

		if ($status) return redirect('pembayaran')->with('success', 'Data Berhasil diubah');
		else return redirect('pembayaran')->with('error', 'Data Gagal diubah');
	}

	public function destroy (Request $request, $id)
	{
		$result = \App\Pembayaran::where('no_bayar', $id)->first();
		$status = $result->delete();

		if ($status) return redirect('pembayaran')->with('success', 'Data Berhasil dihapus');
		else return redirect('pembayaran')->with('error', 'Data Gagal dihapus');
	}
}