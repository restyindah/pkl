<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();
        if (!$tag) {
            $response = [
                'succes' => false,
                'data' => 'Empety',
                'message' => 'Tag tidak ditemukan.'
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
        $tag = Tag::create($input);

        // 5. menampilkan response
        $response = [
            'succes' => true,
            'data' => $tag,
            'message' => 'Tag berhasil ditemukan.'
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
        $tag = Tag::find($id);
        $response = [
            'succes' => false,
            'data' => 'Empety',
            'message' => 'Tag tidak ditemukan.'
        ];
        return response()->json($response, 400);
    }

       $response = [
        'succes' => true,
        'data' => $tag,
        'message' => 'Berhasil'
       ];

       return response()->json($response, 200);

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
        $tag = Tag::find($id);
        $input = $request->all();

        if (!tag) {
            $response = [
                'succes' => false,
                'data' => 'Empety',
                'message' => 'Tag tidak ditemukan.'
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

        $tag->nama = $input['nama'];
        $tag->save();

        $response = [
            'succes' => true,
            'data' => $tag,
            'message' => 'Tag berhasil diupdate'
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
        //
    }
}
