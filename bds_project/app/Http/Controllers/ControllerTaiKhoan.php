<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TaiKhoan;

class ControllerTaiKhoan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TaiKhoan= TaiKhoan::all();
        return $TaiKhoan;
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
        $TaiKhoan = new TaiKhoan;
        $TaiKhoan->TenTaiKhoan = $request->input("TenTaiKhoan");
        $TaiKhoan->MatKhau = $request->input("MatKhau");
        $TaiKhoan->HoTen = $request->input("HoTen");
        $TaiKhoan->DiaChi = $request->input("DiaChi");
        $TaiKhoan->NgaySinh = $request->input("NgaySinh");
        $TaiKhoan->Anh = $request->input("Anh");
        $TaiKhoan->CMT = $request->input("CMT");
        $TaiKhoan->ChucVu = $request->input("ChucVu");
        $TaiKhoan->SoDienThoai = $request->input("SoDienThoai");
        $TaiKhoan->ThongTinKhac = $request->input("ThongTinKhac");
        $TaiKhoan->save();
        return Response($TaiKhoan,201); 
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
       // $TaiKhoan = TaiKhoan::where('MaTaiKhoan', $id)->first();
        $TaiKhoan = TaiKhoan::find($id);
        return $TaiKhoan;
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
        $TaiKhoan = TaiKhoan::find($id);
        $TaiKhoan->TenTaiKhoan = $request->input("TenTaiKhoan");
        $TaiKhoan->MatKhau = $request->input("MatKhau");
        $TaiKhoan->HoTen = $request->input("HoTen");
        $TaiKhoan->DiaChi = $request->input("DiaChi");
        $TaiKhoan->NgaySinh = $request->input("NgaySinh");
        $TaiKhoan->Anh = $request->input("Anh");
        $TaiKhoan->ChucVu = $request->input("ChucVu");
        $TaiKhoan->SoDienThoai = $request->input("SoDienThoai");
        $TaiKhoan->ThongTinKhac = $request->input("ThongTinKhac");
        $TaiKhoan->save();
        return Response($TaiKhoan,201);
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
        $TaiKhoan = TaiKhoan::find($id);
        $TaiKhoan->delete();
        return Response($TaiKhoan,201);
    }
}
