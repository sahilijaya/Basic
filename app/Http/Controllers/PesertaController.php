<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // VALIDASI DATA
        $this->validate($request, [
            'ktp'       => 'required|max:16',
            'nama'      => 'required|max:225',
            'instansi'  => 'required|max:225',
            'alamat'    => 'required|max:225',
            'jumlah'    => 'required|max:225',
            'layanan'   => 'required|max:225',
        ]);

        // MEMASUKKAN/INSERT DATA KE DATABASE
        peserta::create([
            'ktp'       => $request->ktp,
            'nama'      => $request->nama,
            'instansi'  => $request->instansi,
            'alamat'    => $request->alamat,
            'jumlah'    => $request->jumlah,
            'layanan'   => $request->layanan,
        ]);

        return redirect()->back()->with(['success' => 'Data Berhasil Dikirimkan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $peserta = Peserta::findorFail($id);
        $data = [
            'title' => 'Update Data Peserta',
            'peserta' => $peserta,
        ];
        return view('pages.back.peserta.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $peserta = Peserta::findorFail($id);
        $update = $request->all();

        $peserta->update($update);

        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peserta = Peserta::where('id', $id);
        $peserta->delete();
        return redirect()->back();
    }
}
