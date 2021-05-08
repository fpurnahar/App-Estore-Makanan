<?php

namespace App\Http\Controllers;

use App\Models\MenuPromosi as ModelsMenuPromosi;
use Illuminate\Http\Request;

class MenuPromosi extends Controller
{
    /**
     * Display a listing of the resource to Home Public.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPublic()
    {
        $menu_promosi_public = ModelsMenuPromosi::orderBy('id', 'DESC')->paginate(3);
        return view('web.index', compact('menu_promosi_public'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_promosi = ModelsMenuPromosi::orderBy('id', 'DESC')->paginate(10);
        return view('pages.detailmenu-promosi', compact('menu_promosi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_mkn_promosi_slide' => 'required',
            'harga_mkn_promosi_slide' => 'required',
            'desc_mkn_promosi_slide' => 'required',
            'img_mkn_promosi_slide' =>  'required|mimes:jpg,jpeg,png,svg|max:3000',

            'nama_mkn_promosi_middle' => 'required',
            'harga_mkn_promosi_middle' => 'required',
            'desc_mkn_promosi_middle' => 'required',
            'img_mkn_promosi_middle' =>  'required|mimes:jpg,jpeg,png,svg|max:3000',

            'nama_mkn_promosi_buttom' => 'required',
            'harga_mkn_promosi_buttom' => 'required',
            'desc_mkn_promosi_buttom' => 'required',
            'img_mkn_promosi_buttom' =>  'required|mimes:jpg,jpeg,png,svg|max:3000',

        ]);

        $add_menu_mkn_promosi = new ModelsMenuPromosi();
        $add_menu_mkn_promosi->nama_mkn_promosi_slide = $request->nama_mkn_promosi_slide;
        $add_menu_mkn_promosi->harga_mkn_promosi_slide = $request->harga_mkn_promosi_slide;
        $add_menu_mkn_promosi->desc_mkn_promosi_slide = $request->desc_mkn_promosi_slide;

        if ($request->hasFile('img_mkn_promosi_slide')) {
            $file = $request->file('img_mkn_promosi_slide');
            $extends = $file->getClientOriginalExtension();
            $filename = time() . 'img_mkn_promosi_slide.' . $extends;
            $file->move(public_path() . '/assets/dist/img/imgpromosi_slide', $filename);
            $add_menu_mkn_promosi->img_mkn_promosi_slide = $filename;
        }

        $add_menu_mkn_promosi->nama_mkn_promosi_middle = $request->nama_mkn_promosi_middle;
        $add_menu_mkn_promosi->harga_mkn_promosi_middle = $request->harga_mkn_promosi_middle;
        $add_menu_mkn_promosi->desc_mkn_promosi_middle = $request->desc_mkn_promosi_middle;

        if ($request->hasFile('img_mkn_promosi_middle')) {
            $file = $request->file('img_mkn_promosi_middle');
            $extends = $file->getClientOriginalExtension();
            $filename = time() . 'img_mkn_promosi_middle.' . $extends;
            $file->move(public_path() . '/assets/dist/img/imgpromosi_middle', $filename);
            $add_menu_mkn_promosi->img_mkn_promosi_middle = $filename;
        }

        $add_menu_mkn_promosi->nama_mkn_promosi_buttom = $request->nama_mkn_promosi_buttom;
        $add_menu_mkn_promosi->harga_mkn_promosi_buttom = $request->harga_mkn_promosi_buttom;
        $add_menu_mkn_promosi->desc_mkn_promosi_buttom = $request->desc_mkn_promosi_buttom;

        if ($request->hasFile('img_mkn_promosi_buttom')) {
            $file = $request->file('img_mkn_promosi_buttom');
            $extends = $file->getClientOriginalExtension();
            $filename = time() . 'img_mkn_promosi_buttom.' . $extends;
            $file->move(public_path() . '/assets/dist/img/imgpromosi_buttom', $filename);
            $add_menu_mkn_promosi->img_mkn_promosi_buttom = $filename;
        }

        $add_menu_mkn_promosi->save();
        return redirect('/menu_promosi')->with('success', 'Menu Makanan Berhasil Ditambahkan !');
        return redirect('/menu_promosi')->with('error', 'Menu Makanan Gagal Ditambahkan !!!');
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

        ModelsMenuPromosi::destroy($id);
        return back()->with('success', 'Delete Success !!');
        return back()->with('error', 'Delete failed !!');
    }
}
