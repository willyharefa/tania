<?php

namespace App\Http\Controllers;

use App\Models\Grooming;
use Illuminate\Http\Request;
use App\Models\Transaksi2Master;
use App\Models\TransaksiGrooming;

class GroomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grooming.index', [
            'title' => 'Jadwal Grooming',
            'groomings' => Grooming::with('user')->groupBy('user_id')->get()
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
            'jam' => 'required',
            'tanggal' => 'required'
        ]);
        $validated['user_id'] = auth()->user()->id;
        Grooming::insert($validated);
        return redirect('/page/grooming')->with('berhasil', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grooming  $grooming
     * @return \Illuminate\Http\Response
     */
    public function show(Grooming $grooming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grooming  $grooming
     * @return \Illuminate\Http\Response
     */
    public function edit(Grooming $grooming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grooming  $grooming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grooming $grooming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grooming  $grooming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grooming $grooming)
    {
        //
    }

    public function selesai(Grooming $grooming) {
        $result = Grooming::where('user_id', $grooming->user_id)->get();
        $total_price = 0;
        $id = rand();
        foreach($result as $r) {
            TransaksiGrooming::create([
                'transaksi_master_id' => $id,
                'user_id' =>  $r->user->id,
                'tanggal' => $r->tanggal,
                'jam' => $r->jam
            ]);
        }
        Transaksi2Master::create([
            'id' => $id,
            'user_id' => $grooming->user_id,
        ]);
        Grooming::where('user_id', $grooming->user_id)->delete();
        return redirect('grooming');
    }

    public function lihat($user_id) {
        return view('grooming.lihat', [
            'title' => 'Detail Grooming',
            'groomings' => Grooming::with('user')->where('user_id', $user_id)->get()
        ]);
    }

    public function transaksi() {
        return view('grooming.transaksi', [
            'title' => 'Transaksi Grooming',
            'transaksi' => Transaksi2Master::with('user')->get()
        ]);
    }

    public function detail_transaksi($tm) {
        return view('grooming.detail_transaksi', [
            'title' => 'Detail Transaksi',
            'transaksi' => TransaksiGrooming::with('user')->where('transaksi_master_id', $tm)->get()
        ]);
    }
}
