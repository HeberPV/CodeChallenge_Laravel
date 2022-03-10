<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibraryUser;

class LibraryUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraryUser = LibraryUser::all();
        return $libraryUser;
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
        $libraryUser = new LibraryUser();
        $libraryUser->name = $request->name;
        $libraryUser->email = $request->email;

        $libraryUser->save();
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
    public function update(Request $request)
    {
        $libraryUser = LibraryUser::findOrFail($request->id);
        $libraryUser->name = $request->name;
        $libraryUser->email = $request->email;

        $libraryUser->save();

        return $libraryUser;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $libraryUser = LibraryUser::destroy($request->id);
        return $libraryUser;
    }
}
