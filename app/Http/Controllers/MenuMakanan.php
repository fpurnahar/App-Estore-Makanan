<?php

namespace App\Http\Controllers;

use App\Models\MenuMakanan as ModelsMenuMakanan;
use Illuminate\Http\Request;

class MenuMakanan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPublick_MenuMakanan()
    {
        $dataMenuMakananPublic = ModelsMenuMakanan::paginate(3);
        return view('web.components.menu-manakan', compact('dataMenuMakananPublic'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMenuMakanan = ModelsMenuMakanan::get();
        return view('pages.detailmenu-makanan', compact('dataMenuMakanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_makanan' => 'required',
            'harga_makanan' => 'required',
            'desc_makanan' => 'required',
            'img_makanan_1' =>  'required|mimes:jpg,jpeg,png,svg|max:3000',
            'img_makanan_2' =>  'required|mimes:jpg,jpeg,png,svg|max:3000',
            'img_makanan_3' =>  'required|mimes:jpg,jpeg,png,svg|max:3000',

        ]);

        $add_menu_makanan = new ModelsMenuMakanan();
        $add_menu_makanan->nama_makanan = $request->nama_makanan;
        $add_menu_makanan->harga_makanan = $request->harga_makanan;
        $add_menu_makanan->desc_makanan = $request->desc_makanan;

        if ($request->hasFile('img_makanan_1')) {
            $file = $request->file('img_makanan_1');
            $extends = $file->getClientOriginalExtension();
            $filename = time() . 'img_makanan_1.' . $extends;
            $file->move(public_path() . '/assets/dist/img/imgmakanan', $filename);
            $add_menu_makanan->img_makanan_1 = $filename;
        }
        if ($request->hasFile('img_makanan_2')) {
            $file = $request->file('img_makanan_2');
            $extends = $file->getClientOriginalExtension();
            $filename = time() . 'img_makanan_2.' . $extends;
            $file->move(public_path() . '/assets/dist/img/imgmakanan', $filename);
            $add_menu_makanan->img_makanan_2 = $filename;
        }
        if ($request->hasFile('img_makanan_3')) {
            $file = $request->file('img_makanan_3');
            $extends = $file->getClientOriginalExtension();
            $filename = time() . 'img_makanan_3.' . $extends;
            $file->move(public_path() . '/assets/dist/img/imgmakanan', $filename);
            $add_menu_makanan->img_makanan_3 = $filename;
        }

        $add_menu_makanan->save();
        return redirect('/menu_makanan')->with('success', 'Menu Makanan Berhasil Ditambahkan !');
        return redirect('/menu_makanan')->with('error', 'Menu Makanan Gagal Ditambahkan !!!');
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
        ModelsMenuMakanan::destroy($id);
        return back()->with('success', 'Delete Success !!');
        return back()->with('error', 'Delete failed !!');
    }
}
