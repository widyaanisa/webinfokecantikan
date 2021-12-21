<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table ='datareview';

    protected $fillable = [ 
        'judul', 
        'imgreview',
        'jeniskulit',
        'deskripsi'
    ];
    
    protected $primaryKey = 'id_datareview'; 
    }