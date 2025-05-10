<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatController extends Controller
{
     public function index()
    {
    	$data['result'] = \App\Obat::all();
    	return view('obat/obat')->with($data);
    }

      public function create()
	{
		return view('obat/form');
	}

	public function store(Request $request)
	{
		$rules = [
			'nama_obat'	=> 'required',
			'jenis_obat'		=> 'required',
			'kategori'	=> 'required',
			'harga_obat'		=> 'required',
			'stok'		=> 'required'
		];
		$this->validate($request, $rules);

		$input = $request->all();
		$status = \App\Obat::create($input);

		if ($status) return redirect('obat')->with('success', 'Data Berhasil ditambahkan');
		else return redirect('obat')->with('error', 'Data Gagal ditambahkan');
	}

	public function edit($id)
	{
		$data['edit'] = true;
		$data['result'] = \App\Obat::where('kode_obat', $id)->first();
		return view('obat/form')->with($data);
	}

	public function update(Request $request, $id)
	{
		$rules = [
			'nama_obat'	=> 'required',
			'jenis_obat'		=> 'required',
			'kategori'	=> 'required',
			'harga_obat'		=> 'required',
			'stok'		=> 'required'
		];
		$this->validate($request, $rules);

		$input = $request->all();
		$result = \App\Obat::where('kode_obat', $id)->first();
		$status = $result->update($input);

		if ($status) return redirect('obat')->with('success', 'Data Berhasil diubah');
		else return redirect('obat')->with('error', 'Data Gagal diubah');
	}

	public function destroy (Request $request, $id)
	{
		$result = \App\Obat::where('kode_obat', $id)->first();
		$status = $result->delete();

		if ($status) return redirect('obat')->with('success', 'Data Berhasil dihapus');
		else return redirect('obat')->with('error', 'Data Gagal dihapus');
	}
}