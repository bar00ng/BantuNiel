<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $rules = [
            'id_sto' => 'required|string|size:3',
            // 'witel' => 'required|string|min:7|max:30',
            // Add other validation rules as needed
        ];

        // Custom error messages
        $messages = [
            'id_sto.size' => 'ID STO harus terdiri dari 3 karakter.',
            // 'witel.min' => 'WITEL harus memiliki minimal 7 karakter.',
            // 'witel.max' => 'WITEL tidak boleh lebih dari 30 karakter.',
            // Add other custom error messages as needed
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = Lokasi::find($id);
        $data->update($request->all());

        // dd($request->all()); // Tambahkan ini untuk debugging
        return redirect()->route('data_tracking')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit_data_track($id) {
        $data = Track::find($id);
        return view('admin.edit_data_track', [
            'data' => $data
        ]);
    }



}