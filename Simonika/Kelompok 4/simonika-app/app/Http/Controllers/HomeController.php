<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.home', [
            // using eager lazy problem n + 1 query problem
            'home' => Information::with([
                'result',
                'category',
                'dosenone',
                'dosentwo',
            ])
                ->orderBy('category_id', 'asc')
                ->orderBy('nim', 'asc')
                ->paginate(10),
            'title' => 'Home',
        ]);
    }

    public function print()
    {
        return view('home.home_print', [
            // using eager lazy problem n + 1 query problem
            'home' => Information::with([
                'result',
                'category',
                'dosenone',
                'dosentwo',
            ])
                ->orderBy('category_id', 'asc')
                ->orderBy('nim', 'asc')
                ->get(),
            'title' => 'Home',
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
