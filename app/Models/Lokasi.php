<?php

namespace App\Models;

use App\Models\Track;
use Illuminate\Database\Eloquent\Model;
use App\Models\Track;

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

    public function tracking() {
        return $this->belongsTo(Track::class, 'id_sto', 'sto');
    }
}