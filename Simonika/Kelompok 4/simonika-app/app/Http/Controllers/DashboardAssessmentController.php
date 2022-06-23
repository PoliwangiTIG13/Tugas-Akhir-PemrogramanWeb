<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAssessmentController extends Controller
{
    public function __construct()
    {
        $this->Information = new Information();
    }

    public function index()
    {
        $users = DB::table('information')->join('categories', 'users.id', '=', 'contacts.user_id')->get();
        return view('assessment.assessment', [
            'informations' => $users,
            'title' => 'Penilaian',
        ]);
    }

    //
    // public function detail($id)
    // {
    //     $data = [
    //         'information' => $this->detail($id),
    //         'title' => 'Penilaian',
    //     ];
    //     return view('assessment.assessment_sempro', $data);
    // }
}
