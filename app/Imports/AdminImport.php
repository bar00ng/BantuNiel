<?php

namespace App\Imports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AdminImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Admin([
            "witel"         => $row['witel'],
            "sto"           => $row['sto'],
            "node"          => $row['node'],
            "merk"          => $row['merk'],
            "ip_olt"        => $row['ip_olt'],
            "types"         => $row['types'],
            "olt_sizes"     => $row['olt_sizes'],
            "max_port"      => $row['max_port'],
            "port_used"     => $row['port_used'],
            "idle_port"     => $row['idle_port'],
            "add_port"      => $row['add_port'],
            "add_modul"     => $row['add_modul'],
            "slot_max"      => $row['slot_max'],
            "idle_slot"     => $row['idle_slot'],
            "mod_act"       => $row['mod_act'],
            "mod_idle"      => $row['mod_idle'],
            "onu_terpasang" => $row['onu_terpasang']
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
