<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengiriman';

    protected $fillable = [
        'negara_pengirim',
        'nama_pengirim',
        'nama_penerima',
        'bank_penerima',
        'nomor_rekening',
        'alamat',
    ];
}
