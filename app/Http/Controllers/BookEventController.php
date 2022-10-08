<?php

namespace App\Http\Controllers;

use App\Models\BookEvent;
use App\Http\Requests\StoreBookEventRequest;
use App\Http\Requests\UpdateBookEventRequest;

class BookEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBookEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookEvent  $bookEvent
     * @return \Illuminate\Http\Response
     */
    public function show(BookEvent $bookEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookEvent  $bookEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(BookEvent $bookEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookEventRequest  $request
     * @param  \App\Models\BookEvent  $bookEvent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookEventRequest $request, BookEvent $bookEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookEvent  $bookEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookEvent $bookEvent)
    {
        //
    }
}
