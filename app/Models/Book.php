<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['isbn', 'judul', 'halaman', 'kategori', 'penerbit'];
    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = true;

    protected $attributes = [
        'halaman' => 0,
        'kategori' => 'uncategorized',
    ];
}
