<?php

namespace App\Http\Controllers;

use App\Exports\AdminExport;
use App\Models\Admin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Imports\AdminImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Admin::all();
        return view('admin.dashboard');

    }


    public function adminimport(Request $request)
    {
        // $file = $request->file('file');
        // $namaFile = $file->getClientOriginalName();
        // $file->move('DataExcel', $namaFile);
        $file = $request->file('file');

        // Simpan file Excel ke direktori yang diinginkan
        $file->storeAs('DataExcel', $file->getClientOriginalName());

        Excel::import(new AdminImport, $request->file('file'));
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}