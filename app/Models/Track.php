<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{

    use HasFactory;

    protected $table = 'tracking';
    protected $primaryKey = 'id';

    protected $fillable = [
        "witel",
        "sto",
        "hostname",
        "ip_olt",
        "types",
        "platform",
        "olt_size",
        "tgl_dikirim",
        "status",
        "tgl_diterima",
        "pic_penerima"
    ];
}