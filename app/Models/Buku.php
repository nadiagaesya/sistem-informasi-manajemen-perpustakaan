<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = ['judul', 'stok', 'sampul', 'slug', 'penulis', 'kategori_id', 'rak_id', 'penerbit_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }

    public function buku()
    {
        return $this->hasMany(DetailPeminjaman::class);
    }

    //mutator
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = ucfirst($value); //berfungsi agar ketika menambahkan data judul baru dengan huruf kecil semua akan otomatis diawali dengan huruf besar dan diikuti huruf kecil
    }
    
    public function setPenulisAttribute($value)
    {
        $this->attributes['penulis'] = ucfirst($value); //berfungsi agar ketika menambahkan data penulis baru dengan huruf kecil semua akan otomatis diawali dengan huruf besar dan diikuti huruf kecil
    }
}
