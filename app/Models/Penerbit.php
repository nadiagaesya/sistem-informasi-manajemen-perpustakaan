<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'penerbit';
    protected $fillable = ['nama', 'slug'];

    //relasi
    public function buku()
    {
        return $this->hasMany(Buku::class);
    }

    //mutator
    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = ucfirst($value); //berfungsi agar ketika menambahkan data penerbit baru dengan huruf kecil semua akan otomatis didahului dengan huruf besar dan diikuti huruf kecil
    }
}
