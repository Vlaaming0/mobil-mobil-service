<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $primaryKey = 'mobil_id'; // tambahkan ini

    public $incrementing = true; // opsional, true = auto-increment

    protected $keyType = 'int';  // karena kamu pakai bigIncrements

    protected $fillable = [
        'nama',
        'merk',
        'deskripsi',
        'amount',
        'gambar'
    ];

}

