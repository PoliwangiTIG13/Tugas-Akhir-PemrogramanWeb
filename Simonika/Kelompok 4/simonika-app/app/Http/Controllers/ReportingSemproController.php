<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class ReportingSemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('reporting.reporting_sempro_done', [
            'information' => Information::with(['result', 'category'])
                ->where('category_id', '1')
                ->where('result_id', '1')
                ->orderBy('category_id', 'asc')
                ->orderBy('nim', 'asc')
                ->get(),
            'title' => 'Laporan Sudah Seminar Proposal',
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
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
        return $information;
        // return view('reporting.reporting_sempro_done_show', [
        //     'title' => 'Laporan Sudah Seminar Proposal',
        //     'information' => $information,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
        Information::destroy($information->id);
        return redirect('/laporan/sempro/done')->with(
            'delete',
            'Post destroy successfully delete'
        );
    }
}
