<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Category;
use App\Models\DosenBimOne;
use App\Models\DosenBimTwo;
use App\Models\DosenJiOne;
use App\Models\DosenJiTwo;
use App\Models\Result;
use Illuminate\Http\Request;

class AssessmentSemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('assessment.assessment_sempro', [
            // 'title' => 'Penilaian',
            'category' => Category::all(),
            'dosenone' => DosenBimOne::all(),
            'dosentwo' => DosenBimTwo::all(),
            'dosenthird' => DosenJiOne::all(),
            'dosenfour' => DosenJiTwo::all(),
            'mark' => Result::all(),
        ]);
        // return 'true';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('assessment.assessment_sempro', [
            'title' => 'Penilaian Seminar Proposal',
            'category' => Category::all(),
            'dosenone' => DosenBimOne::all(),
            'dosentwo' => DosenBimTwo::all(),
            'dosenthird' => DosenJiOne::all(),
            'dosenfour' => DosenJiTwo::all(),
            'mark' => Result::all(),
        ]);
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
        $validate_data = $request->validate([
            'nim' => 'required|unique:information',
            'nama' => 'required',
            'judulPA' => 'required|max:255',
            'category_id' => 'required',
            'dosenone_id' => 'required',
            'dosentwo_id' => 'required',
            'dosenthird_id' => 'required',
            'dosenfour_id' => 'required',
            'nilai' => 'required',
            'result_id' => 'required',
        ]);
        Information::create($validate_data);

        return redirect('/penilaian/sempro')->with(
            'success',
            'New data created successfully add'
        );
        // return $request;
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
        //
        Information::destroy($information->id);
        return redirect('/laporan/sempro/done')->with(
            'delete',
            'Post destroy successfully delete'
        );
    }
}