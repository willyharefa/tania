<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Models\TransaksiPesan;
use App\Models\TransaksiMaster;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Pemesanan';
        $pesanans = Pesan::with(['user', 'item'])->groupBy('user_id')->get();
        // dd($pesanans);
        return view('pesanan.index', compact('title', 'pesanans'));
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
            'item_id' => 'required|numeric',
            'qty' => 'required|numeric'
        ]);

        $harga = Item::select('price')->where('id', Request()->input('item_id'))->get()[0]->price;
        $validated['user_id'] = auth()->user()->id;
        $validated['hp'] = auth()->user()->hp;
        $validated['sub_price'] = $harga * $validated['qty'];
        Pesan::insert($validated);
        return redirect('/page/item')->with(['berhasil' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        //
    }
    public function selesai(Pesan $pesan) {
        $result = Pesan::where('user_id', $pesan->user_id)->get();
        $total_price = 0;
        $id = rand();
        // dd($result[0]->item);
        foreach($result as $r) {
            $total_price += $r->sub_price;
            TransaksiPesan::create([
                'transaksi_master_id' => $id,
                'item_id' => $r->item->id,
                'user_id' =>  $r->user->id,
                'qty' =>  $r->qty,
                'sub_price' =>  $r->sub_price
            ]);
        }
        TransaksiMaster::create([
            'id' =>$id,
            'user_id' => $pesan->user_id,
            'total_price' => $total_price,
            'status' => 'pesanan'
        ]);
        Pesan::where('user_id', $pesan->user_id)->delete();
        return redirect('pesanan');
    }

    public function lihat($user_id) {
        return view('pesanan.lihat', [
            'title' => 'Detail Pesanan',
            'pesanans' => Pesan::with(['user', 'item'])->where('user_id', $user_id)->get()
        ]);
    }
    
    public function xtransaksi() {
        return view('pesanan.transaksi', [
            'title' => 'Transaksi Pesanan',
            'transaksi' => TransaksiMaster::with('user')->where('status', 'pesanan')->get()
        ]);
    }

    public function detail_transaksi($tm) {
        return view('pesanan.detail_transaksi', [
            'title' => 'Detail Transaksi',
            'transaksi' => TransaksiPesan::with('user')->where('transaksi_master_id', $tm)->get()
        ]);
    }
    public function transaksi() {
        return view('pesanan.transaksi', [
            'title' => 'Transaksi Pesanan',
            'transaksi' => TransaksiMaster::with('user')->where('status', 'pesanan')->get()
        ]);
    }
}
