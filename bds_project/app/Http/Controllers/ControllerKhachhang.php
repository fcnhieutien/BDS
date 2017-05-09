<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\KhachHang;

class ControllerKhachHang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KhachHang= KhachHang::all();
        return $KhachHang;
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
        $KhachHang = new KhachHang;
        $KhachHang->TenKhachHang = $request->input("TenKhachHang");
        $KhachHang->LoaiKhachHang = $request->input("LoaiKhachHang");
        $KhachHang->NganhNghe = $request->input("NganhNghe");
        $KhachHang->HoKhau = $request->input("HoKhau");
        $KhachHang->DienThoai = $request->input("DienThoai");
        $KhachHang->Email = $request->input("Email");
        $KhachHang->ThanhPho = $request->input("ThanhPho");
        $KhachHang->CMTND = $request->input("CMTND");
        $KhachHang->LienHe = $request->input("LienHe");
        $KhachHang->DienThoaiLienHe = $request->input("DienThoaiLienHe");
        $KhachHang->ThongTinKhac = $request->input("ThongTinKhac");
        $KhachHang->save();
        return Response($KhachHang,201); 
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
       // $KhachHang = KhachHang::where('MaKhachHang', $id)->first();
        $KhachHang = KhachHang::find($id);
        return $KhachHang;
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
        $KhachHang = KhachHang::find($id);
        $KhachHang->TenKhachHang = $request->input("TenKhachHang");
        $KhachHang->LoaiKhachHang = $request->input("LoaiKhachHang");
        $KhachHang->NganhNghe = $request->input("NganhNghe");
        $KhachHang->HoKhau = $request->input("HoKhau");
        $KhachHang->DienThoai = $request->input("DienThoai");
        $KhachHang->Email = $request->input("Email");
        $KhachHang->ThanhPho = $request->input("ThanhPho");
        $KhachHang->CMTND = $request->input("CMTND");
        $KhachHang->LienHe = $request->input("LienHe");
        $KhachHang->DienThoaiLienHe = $request->input("DienThoaiLienHe");
        $KhachHang->ThongTinKhac = $request->input("ThongTinKhac");
        $KhachHang->save();
        return Response($KhachHang,201);
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
        $KhachHang = KhachHang::find($id);
        $KhachHang->delete();
        return Response($KhachHang,201);
    }
}
