<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        if (!$kategori) {
            $response = [
                'succes' => false,
                'data' => 'Empety',
                'message' => 'Kategori tidak ditemukan.'
            ];
            return response()->json($response,404);
        }

        $response = [
            'succes' => false,
            'data' => 'Empety',
            'message' => 'Berhasil'
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
        // 1. tampung semua inputan ke $input;
        $input = $request->all();

        // 2. buat validasi ditampung ke $validor
        $validor = Validator::make($input,[
            'nama' => 'required|min:15'
        ]);

        // 3. Chek validasi
        if ($validator->fails()) {
            $response = [
                'succes' => false,
                'data' => 'Validation Eror.',
                'message' => $validator->erors()
            ];
            return response()->json($response, 500);
        }

        // 4. buat fungsi untuk menghandle semua inputan ->
        // dimasukan ke table
        $kategori = Kategori::create($input);

        // 5. menampilkan response
        $response = [
            'succes' => true,
            'data' => $kategori,
            'message' => 'Kategori berhasil ditemukan.'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);

        // 7. menmapilkan error di heroku :
        // heroku config::set APP_DEBUG=true
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);
        if(!$kategori) {
            $response = [
            'succes' => false,
            'data' => 'Empety',
            'message' => 'Kategori tidak ditemukan.'
        ];
        return response()->json($response, 404);
    }

       $response = [
        'succes' => true,
        'data' => $kategori,
        'message' => 'Berhasil'
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
       $kategori = Kategori::find($id);
        $input = $request->all();

        if (!kategori) {
            $response = [
                'succes' => false,
                'data' => 'Empety',
                'message' => 'Kategori tidak ditemukan.'
            ];
            return response()->json($response, 400);
        }
        $validator = Validator::make($input, [
            'nama' => 'required|min:15'
        ]);

        if ($validator->fails()) {
            $response = [
                'succes' => false,
                'data' => 'Validation eror',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

       $kategori->nama = $input['nama'];
       $kategori->save();

        $response = [
            'succes' => true,
            'data' =>$kategori,
            'message' => 'Kategori berhasil diupdate'
        ];
        return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($Id);
        if(!$kategori){
            $response = [
                'succes' => false,
                'data' => 'Gagal menghapus.',
                'message' => 'Kategori tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $kategori->delete();
        $response = [
            'succes' => true,
            'data' => $kategori,
            'message' => 'Kategori berhasil dihapus'
        ];

        return response()->json($response, 200);
    }
    
}
