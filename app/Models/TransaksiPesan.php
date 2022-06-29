<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPesan extends Model
{
    use HasFactory;
    protected $table = 'transaksi_pesans';
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
