<?php

namespace App\Http\Controllers;

use App\Models\Datadiri;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Datadiri::latest()->get();
        return view('about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credential = $this->validate($request,[
            'nama_lengkap' => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
            'jns_kelamin' => ['required'],
            'gol_darah' => ['required'],
            'alamat' => ['required'],
            'agama' => ['required'],
            'hobby' => ['required'],
            'telepon' => ['required'],
         ]);
         if($credential){
             $create = Datadiri::create([
                'nama_lengkap' => $request->nama_lengkap,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jns_kelamin' => $request->jns_kelamin,
                'gol_darah' => $request->gol_darah,
                'alamat' => $request->alamat,
                'agama' => $request->agama,
                'hobby' => $request->hobby,
                'telepon' => $request->telepon,
             ]);
             if($create){
                 return redirect()
                 ->route('about.index')
                 ->with([
                     'success' => 'Data Diri Has Been Added successfully'
                 ]);
             }else{
                 return redirect()
                 ->back()
                 ->with([
                     'error' => 'Some problem has occurred, please try again'
                 ]);
             }
         }else{
             return redirect()
             ->back()
             ->with([
                 'error' => 'Some problem has occurred, please try again'
             ]);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
