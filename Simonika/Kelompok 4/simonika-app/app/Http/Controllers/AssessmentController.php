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

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Information::where('id', auth()->user()->id)->get();
        $information = Information::with('category', 'result')
            ->orderBy('category_id', 'asc')
            ->orderBy('nim', 'asc')
            ->paginate(10);
        return view('assessment.assessment', [
            'informations' => $information,
            'title' => 'Penilaian',
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
        return view('assessment.assessment_sempro', [
            'title' => 'Penilaian Proyek Akhir',
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

        return redirect('/penilaian')->with(
            'success',
            'New data created successfully add'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $informations = Information::findOrFail($id);
        return view('assessment.assessment_detail', [
            'title' => 'Assessment Detail',
            'information' => $informations,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informations = Information::findOrFail($id);
        return view('assessment.assessment_update', [
            'title' => 'Assessment Update',
            'category' => Category::all(),
            'dosenone' => DosenBimOne::all(),
            'dosentwo' => DosenBimTwo::all(),
            'dosenthird' => DosenJiOne::all(),
            'dosenfour' => DosenJiTwo::all(),
            'mark' => Result::all(),
            'information' => $informations,
        ]);
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
        $validate_datas = $request->validate([
            'nim' => 'required',
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

        Information::whereId($id)->update($validate_datas);

        return redirect('/penilaian')->with(
            'update',
            'Data updated successfully update'
        );
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
        $informations = Information::findOrFail($id);
        $informations->delete();
        return redirect('penilaian')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }
}
