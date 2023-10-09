<?php

namespace App\Imports;

use App\Models\Track;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TrackImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Track([
            "witel"         => $row['witel'],
            "sto"           => $row['sto'],
            "hostname"      => $row['hostname'],
            "ip_olt"        => $row['ip_olt'],
            "types"         => $row['types'],
            "platform"      => $row['platform'],
            "olt_size"      => $row['olt_size'],
            "tgl_dikirim"   => $row['tgl_dikirim'],
            "status"        => $row['status'],
            "tgl_diterima"  => $row['tgl_diterima'],
            "pic_penerima"  => $row['pic_penerima'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}