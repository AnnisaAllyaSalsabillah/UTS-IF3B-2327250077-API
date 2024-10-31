<?php

namespace App\Http\Controllers;

use App\Models\social_users;
use Illuminate\Http\Request;

class SocialUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social_users = SocialUsers::all();
        $data['success'] = true;
        $data['message'] = "Data Pengguna Sosial Media berhasil disimpan";
        $data['result'] = $social_users;
        return response()->json($data, Response::HTTP_OK);
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
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:social_users'
        ]);

        $result = Fakultas::create($validate); //simpan ke tabel fakultas
        if($result){
            $data['success'] = true;
            $data['message'] = "Data Pengguna Sosial media berhasil disimpan";
            $data['result'] = $result;
            return response()->json($data, Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(social_users $social_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(social_users $social_users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, social_users $social_users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(social_users $social_users)
    {
        //
    }
}
