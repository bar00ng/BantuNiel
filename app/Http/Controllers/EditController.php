<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Track;

class EditController extends Controller
{
    //

    public function edit_lokasi($id) {
        $data = Lokasi::find($id);
        return view('admin.edit_lokasi', [
            'data' => $data
        ]);
    }

    public function update_lokasi(Request $request, $id) {
        $data = Lokasi::find($id);

        if (!$data) {
            abort(404);
        }

        $data->update($request->all());

        // dd($request->all()); // Tambahkan ini untuk debugging
        return redirect()->route('data_tracking');
    }

    public function edit_data_track($id) {
        $data = Track::find($id);
        return view('admin.edit_data_track', [
            'data' => $data
        ]);
    }



}