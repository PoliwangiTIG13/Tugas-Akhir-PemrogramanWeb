<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reporting.reporting', [
            'title' => 'Laporan',
        ]);
    }

    public function sempro()
    {
        return view('reporting.reporting_sempro', [
            'title' => 'Laporan Seminar Proposal',
        ]);
    }

    public function sempro_done_print()
    {
        return view('reporting.reporting_sempro_done_print', [
            'information' => Information::with(['result', 'category'])
                ->where('category_id', '1')
                ->where('result_id', '1')
                ->orderBy('category_id', 'asc')
                ->orderBy('nim', 'asc')
                ->get(),
            'title' => 'Laporan Sudah Seminar Proposal',
        ]);
    }

    public function sempro_never_print()
    {
        return view('reporting.reporting_sempro_never_print', [
            'information' => Information::with(['result', 'category'])
                ->where('category_id', '1')
                ->where('result_id', '2')
                ->orderBy('category_id', 'asc')
                ->orderBy('nim', 'asc')
                ->get(),
            'title' => 'Laporan Belum Seminar Proposal',
        ]);
    }

    public function semhas()
    {
        return view('reporting.reporting_semhas', [
            'title' => 'Laporan Seminar Hasil',
        ]);
    }

    public function semhas_done_print()
    {
        return view('reporting.reporting_semhas_done_print', [
            'information' => Information::with(['result', 'category'])
                ->where('category_id', '2')
                ->where('result_id', '1')
                ->orderBy('category_id', 'asc')
                ->orderBy('nim', 'asc')
                ->get(),
            'title' => 'Laporan Sudah Seminar Proposal',
        ]);
    }

    public function semhas_never_print()
    {
        return view('reporting.reporting_semhas_never_print', [
            'information' => Information::with(['result', 'category'])
                ->where('category_id', '2')
                ->where('result_id', '2')
                ->orderBy('category_id', 'asc')
                ->orderBy('nim', 'asc')
                ->get(),
            'title' => 'Laporan Belum Seminar Proposal',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
