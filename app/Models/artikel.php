<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
protected $table ='dataartikel';

protected $fillable = [ 
    'judul', 
    'imgartikel',
    'deskripsi'
];

protected $primaryKey = 'id_dataartikel'; 
}
