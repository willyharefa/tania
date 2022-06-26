<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi2Master extends Model
{
    use HasFactory;

    protected $table = 'transaksi2_masters';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaksi_grooming()
    {
        return $this->hasMany(TransaksiGrooming::class);
    }
}
