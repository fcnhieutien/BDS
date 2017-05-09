<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LoaiSP;

class ControllerLoaiSP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LoaiSP= LoaiSP::all();
        return $LoaiSP;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "create";
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
        $LoaiSP = new LoaiSP;
        $LoaiSP->TenLoaiSP = $request->input("TenLoaiSP");
        $LoaiSP->MoTa = $request->input("MoTa");
        $LoaiSP->save();
        return Response($LoaiSP,201); 
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
       // $LoaiSP = LoaiSP::where('MaLoaiSP', $id)->first();
        $LoaiSP = LoaiSP::find($id);
        return $LoaiSP;
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
        echo "edit";
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
        $LoaiSP = LoaiSP::find($id);
        $LoaiSP->TenLoaiSP = $request->input("TenLoaiSP");
        $LoaiSP->MoTa = $request->input("MoTa");
        $LoaiSP->save();
        return Response($LoaiSP,201);
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
        $LoaiSP = LoaiSP::find($id);
        $LoaiSP->delete();
        return Response($LoaiSP,201);
    }
}
