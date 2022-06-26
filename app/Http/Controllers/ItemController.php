<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('item.index', [
            'title' => 'Item',
            'items' => Item::all()
        ]);
    }
    public function form() {
        return view('item.item-form-tambah', [
            'title' => 'Tambah Item'
        ]);
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
        $validated = Request()->validate([
            'nama' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $validated['foto'] = Request()->foto->store('item-image');
        Item::insert($validated);
        return redirect('/item');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.item-form-edit', [
            'title' => 'Edit Item',
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $rules = [
            'nama' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric'
        ];
        if(isset(Request()->foto)) {
            $rules['foto'] = 'required||image|mimes:jpeg,png,jpg|max:2048';
        }
        $validated = Request()->validate($rules);

        if(isset(Request()->foto)) {
            $foto = Item::where('id', Request()->input('id'))->select('foto')->get()[0]->foto;
            Storage::delete($foto);
            $validated['foto'] = Request()->foto->store('item-image');
        }
        Item::where('id', Request()->input('id'))->update($validated);
        return redirect('/item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::where('id', $item->id)->delete();
        Storage::delete($item->foto);
        return redirect('/item');
    }
}
