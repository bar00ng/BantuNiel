<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'tb_dashboard';
    protected $primaryKey = 'id';

    protected $fillable = [
        "witel",
        "sto",
        "node",
        "merk",
        "ip_olt",
        "types",
        "olt_sizes",
        "max_port",
        "port_used",
        "idle_port",
        "add_port",
        "add_modul",
        "slot_max",
        "idle_slot",
        "mod_act",
        "mod_idle",
        "onu_terpasang"
    ];
}