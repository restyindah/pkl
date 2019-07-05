<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contoh;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $data = contoh::all();
        $response = [
            'succes' => true,
            'data' => $data,
            'message' => 'berhasil'

        ];
        return response()->json($response,200);
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
        $data = new contoh();
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->alamat = $request->alamat;
        $data->kelas = $request->kelas;
        $data->hobby = $request->hobby;
        $data->save();
        $response = [
            'succes' => true,
            'data' => $data,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Contoh::findOrFail($id);
        $response = [
            'succes' => true,
            'data' => $data,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
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
        
            $data = Contoh::findOrFail($id);
            $data->nama = $request->nama;
            $data->umur = $request->umur;
            $data->alamat = $request->alamat;
            $data->kelas = $request->kelas;
            $data->hobby = $request->hobby;
            $data->save();
            $response = [
                'succes' => true,
                'data' => $data,
                'message' => 'berhasil'
            ];
            return response()->json($response, 200);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Contoh::findOrFail($id)->delete();
        $response = [
            'succes' => true,
            'data' => $data,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
