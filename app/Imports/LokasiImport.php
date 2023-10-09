<?php

namespace App\Imports;

use App\Models\Lokasi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LokasiImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Lokasi([
            "regional"           => $row['regional'],
            "witel"         => $row['witel'],
            "id_sto"     => $row['id_sto'],
            "nama_sto"      => $row['nama_sto'],
            "lat"     => $row['lat'],
            "long"      => $row['long']
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}