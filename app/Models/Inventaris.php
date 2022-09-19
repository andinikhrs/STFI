<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    public $fillable = ['noinventaris', 'namaalat', 'Merk', 'hargasatuan', 'jumlah', 'lokasi', 'kondisi', 'tahunpembuatan', 'usiabarang'] ;
    public $timestamps = true;
}
