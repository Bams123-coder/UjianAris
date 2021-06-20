<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Mahasiswa::all();
        $data = Mahasiswa::latest()->paginate(5);
        // return view('mahasiswa_index', ['data' => $data]);
        return view('mahasiswa.mahasiswa_index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.mahasiswa_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mahasiswa = new Mahasiswa;

        $mahasiswa->nbi = $request->nbi;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->save();
        // return view('mahasiswa_index');
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($mahasiswa)
    {

        $mahasiswa = Mahasiswa::find($mahasiswa);

        return view('mahasiswa.mahasiswa_edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //

        $request->validate([
            'nbi' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa->update($request->all());

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //        
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return $this->index();
    }
}
