<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Information;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    //
    public function printAction() {
        $data = Information::all();

        // $pdf = PDF::loadview('pegawai_pdf', ['data' => $data]);
        return view('print', compact('data'));
    }
}
