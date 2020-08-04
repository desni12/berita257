<?php

namespace App\Http\Controllers;

use App\News as Berita;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Berita::all();

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Berita::create($request->all());
        return "data telah berhasil disimpan";

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $data=Berita::findOrFail();
        return $data;

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $berita
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Berita $berita)
    {
        $data=Berita::findOrFail($id);
        $data->judul=$request->judul;
        $data->headline=$request->headline;
        $data->isi=$request->isi;
        $data->penulis=$request->penulis;
        $data->save();
        return"data berhasil diubah";
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Berita::findOrFail($id);
        $data->delete();
        return"data berhasil dihapus";
        //
    }
}
