<?php

namespace App\Http\Controllers;

use App\RankList;
use Illuminate\Http\Request;

class RankListController extends Controller
{
    private $title = 'rank';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rank.index') -> withTitle($this->title);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RankList  $rankList
     * @return \Illuminate\Http\Response
     */
    public function show(RankList $rankList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RankList  $rankList
     * @return \Illuminate\Http\Response
     */
    public function edit(RankList $rankList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RankList  $rankList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RankList $rankList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RankList  $rankList
     * @return \Illuminate\Http\Response
     */
    public function destroy(RankList $rankList)
    {
        //
    }
}
