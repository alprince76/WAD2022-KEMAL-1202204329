<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $showrooms = Showroom::all();
        return view('ListCar-Kemal', ['showrooms' => $showrooms]);
    }

    public function detail($id) {
        $detailcar = Showroom::where('id', $id)->get();
        return view('Detail-Kemal', ['detailcar' => $detailcar]);
    }

    public function edit($id) {
        $editcar = Showroom::where('id', $id)->get();
        return view('Edit-Kemal', ['editcar' => $editcar]);
    }

     /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data_gambar = $request->file('File');
        $data_gambar->move(public_path('Asset'), $data_gambar->getClientOriginalName());

        $store = new Showroom;
        $store->name = $request->Nama_Mobil;
        $store->owner = $request->Nama_Pem;
        $store->brand = $request->Brand;
        $store->purchase_date = $request->Tanggals;
        $store->description = $request->Desc;
        $store->image = $request->File->getClientOriginalName();
        $store->status = $request->statusbayar;
        $store->save();
        return redirect()->route('my-car.index')->with('success','Succesfully added car!');

    }

  

   
}
