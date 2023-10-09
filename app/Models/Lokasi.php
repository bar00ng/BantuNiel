<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasi';
    protected $primaryKey = 'id';

    protected $fillable = [
        "regional",
        "witel",
        "id_sto",
        "nama_sto",
        "lat",
        "long"
    ];

}