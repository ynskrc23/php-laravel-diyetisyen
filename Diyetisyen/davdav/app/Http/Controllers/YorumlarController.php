<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yorumlar;
use App\Sayfa;
use DB;

class YorumlarController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
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
        $this->validate($request, array( 
            'name' => 'required',
            'comment'  => 'required',
            'yorum_sayfa_id'  => 'required'            
        ));

        $yorumlar = new Yorumlar;
        $yorumlar->name = $request->name;
        $yorumlar->comment = $request->comment;
        $yorumlar->yorum_sayfa_id = $request->yorum_sayfa_id;
        $yorumlar->save();
        return redirect()->back();

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
       
        $sayfalar = Yorumlar::find($id);      
        return view('sayfalar.show')->with('sayfalar', $sayfalar);
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
