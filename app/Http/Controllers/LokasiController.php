<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\Lokasi;
use App\Imports\TrackImport;

use Illuminate\Http\Request;
use App\Imports\LokasiImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class LokasiController extends Controller
{
    //
    public function index_t() {

        $tracking = Track::all();
        $data = Lokasi::with('tracking')->get();
        $countBandung = Lokasi::where('witel', 'BANDUNG')->count();
        $countBandungBarat = Lokasi::where('witel', 'BANDUNG BARAT')->count();
        $countCirebon = Lokasi::where('witel', 'CIREBON')->count();
        $countKarawang = Lokasi::where('witel', 'KARAWANG')->count();
        $countSukabumi = Lokasi::where('witel', 'SUKABUMI')->count();
        $countTasikmalaya = Lokasi::where('witel', 'TASIKMALAYA')->count();
        $totalCount = Lokasi::count();

        return view('admin.tracking', [
            'tracking' => $tracking,
            'data' => $data,
            'countBandung' => $countBandung,
            'countBandungBarat' => $countBandungBarat,
            'countCirebon' => $countCirebon,
            'countKarawang' => $countKarawang,
            'countSukabumi' => $countSukabumi,
            'countTasikmalaya' => $countTasikmalaya,
            'totalCount' => $totalCount, // Mengirim total count ke view
    ]);
}

    public function data_tracking() {
        $data = Lokasi::all();
        return view('admin.data_tracking', ['data' => $data]);
    }

    public function lokasiimport(Request $request)
    {
        // $file = $request->file('file');
        // $namaFile = $file->getClientOriginalName();
        // $file->move('DataExcel', $namaFile);
        $file = $request->file('file');

        // Simpan file Excel ke direktori yang diinginkan
        $file->storeAs('DataExcel', $file->getClientOriginalName());

        Excel::import(new LokasiImport, $request->file('file'));
        return redirect('/tracking');
    }

    public function lokasi_track(Request $request)
    {
        // $file = $request->file('file');
        // $namaFile = $file->getClientOriginalName();
        // $file->move('DataExcel', $namaFile);
        $file = $request->file('file');

        // Simpan file Excel ke direktori yang diinginkan
        $file->storeAs('DataExcel', $file->getClientOriginalName());

        Excel::import(new TrackImport, $request->file('file'));
        return redirect('/tracking');
    }

}