<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Grooming;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('page.home');
    }

    public function page_item() {
        return view('page.item', [
            'title' => 'Item',
            'items' => Item::all()
        ]);
    }

    public function page_grooming() {
        return view('page.grooming', ['title' => 'Grooming']);
    }

    public function page_booking() {
        // dd(Grooming::where('tanggal', Request()->input('tanggal'))->get());
        return view('page.grooming', [
            'title' => 'Grooming',
            'tanggal' => Request()->input('tanggal'),
            'groomings' => Grooming::where('tanggal', Request()->input('tanggal'))->get()
        ]);
    }
}
