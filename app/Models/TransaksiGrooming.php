<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiGrooming extends Model
{
    use HasFactory;
    protected $table = 'transaksi_groomings';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
