<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookBorrowed;
use App\Models\LibraryUser;
use App\Mail\MessageSender;
use App\Mail\MessageReSender;
use Illuminate\Support\Facades\Mail;

class BookBorrowedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookBorrowed = BookBorrowed::all();
        return $bookBorrowed;
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
        $bookBorrowed = new BookBorrowed();
        $bookBorrowed->book_id = $request->book_id;
        $bookBorrowed->user_id = $request->user_id;

        $bookBorrowed->save();

        $receivers = LibraryUser::pluck('email');
        $call = 'Mensaje enviado';
        Mail::to($receivers)->send(new MessageSender($call));
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
        $bookBorrowed = BookBorrowed::findOrFail($request->id);
        $bookBorrowed->book_id = $request->book_id;
        $bookBorrowed->user_id = $request->user_id;

        $bookBorrowed->save();

        return $bookBorrowed;
    }

    /**
     * Remove the specified resource from storage.
     *@param  \Illuminate\Http\Request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request)
    {
        $bookBorrowed = BookBorrowed::destroy($request->id);

        $receivers = LibraryUser::pluck('email');
        $call = 'Mensaje enviado';
        Mail::to($receivers)->send(new MessageReSender($call));

        return $bookBorrowed;
    }
}
