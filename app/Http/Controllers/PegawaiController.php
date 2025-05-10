<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Pegawai::all();
    	return view('pegawai/pegawai')->with($data);
    }

      public function create()
	{
		return view('pegawai/form');
	}

	public function store(Request $request)
	{
		$rules = [
			'nama_pegawai'	=> 'required',
			'jk'		=> 'required',
			'alamat'	=> 'required',
			'notelp'		=> 'required',
			'foto'		=>	'required|max:2048'
		];

		$this->validate($request, $rules);

		$input = $request->all();

		if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
			$filename = $input['nama_pegawai'].".".$request->file('foto')->getClientOriginalExtension();
			$request->file('foto')->move('uploads/', $filename);
			$input['foto'] = $filename;
		}

		$status = \App\Pegawai::create($input);

		if ($status) return redirect('pegawai')->with('success', 'Data Berhasil ditambahkan');
		else return redirect('pegawai')->with('error', 'Data Gagal ditambahkan');
	}

	public function edit($id)
	{
		$data['edit'] = true;
		$data['result'] = \App\Pegawai::where('id_pegawai', $id)->first();
		return view('pegawai/form')->with($data);
	}

	public function update(Request $request, $id)
	{
		$rules = [
			'nama_pegawai'	=> 'required',
			'jk'		=> 'required',
			'alamat'	=> 'required',
			'notelp'		=> 'required',
			'foto'		=>	'required|max:2048'
		];
		$this->validate($request, $rules);

		$input = $request->all();
		$result = \App\Pegawai::where('id_pegawai', $id)->first();

		if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
			$filename = $input['nama_pegawai'].".".$request->file('foto')->getClientOriginalExtension();
			$request->file('foto')->move('uploads/', $filename);
			$input['foto'] = $filename;
		}

		$status = $result->update($input);



		if ($status) return redirect('pegawai')->with('success', 'Data Berhasil diubah');
		else return redirect('pegawai')->with('error', 'Data Gagal diubah');
	}

	public function destroy (Request $request, $id)
	{
		$result = \App\Pegawai::where('id_pegawai', $id)->first();
		$status = $result->delete();

		if ($status) return redirect('pegawai')->with('success', 'Data Berhasil dihapus');
		else return redirect('pegawai')->with('error', 'Data Gagal dihapus');
	}
}
