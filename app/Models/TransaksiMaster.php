<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiMaster extends Model
{
    use HasFactory;
    protected $table = 'transaksi_masters';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transaksi_pesan()
    {
        return $this->hasMany(TransaksiPesan::class);
    }
}