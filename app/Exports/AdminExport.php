<?php

namespace App\Exports;

use App\Models\Admin;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdminExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Admin::select('witel', 'sto', 'node', 'merk', 'ip_olt', 'types', 'olt_sizes', 'max_port', 'port_used', 'idle_port', 'add_port', 'add_modul', 'slot_max', 'idle_slot', 'mod_act', 'mod_idle', 'onu_terpasang')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Witel',
            'STO',
            'Node',
            'Merk',
            'IP OLT',
            'Types',
            'OLT Sizes',
            'Max Port',
            'Port Used',
            'Idle Port',
            'Add Port',
            'Add Modul',
            'Slot Max',
            'Idle Slot',
            'Mod Act',
            'Mod Idle',
            'ONU Terpasang',
        ];
    }

    /**
     * @param mixed $row
     *
     * @return array
     */
    public function map($row): array
    {
        // Mengembalikan data dalam format yang sesuai dengan kolom-kolom yang Anda inginkan
        return [
            $row->witel,
            $row->sto,
            $row->node,
            $row->merk,
            $row->ip_olt,
            $row->types,
            $row->olt_sizes,
            $row->max_port,
            $row->port_used,
            $row->idle_port,
            $row->add_port,
            $row->add_modul,
            $row->slot_max,
            $row->idle_slot,
            $row->mod_act,
            $row->mod_idle,
            $row->onu_terpasang,
        ];
    }

    public function view(): View
    {
        return view('dashboard', [
            'data' => Admin::all()
        ]);
    }
}
