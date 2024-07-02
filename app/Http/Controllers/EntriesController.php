<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MattDaneshvar\Survey\Models\Survey;

class EntriesController extends Controller
{
    public function create() {
        $survey = Survey::find(1);
        return view('entries/create', ['survey' => $survey]);
    }
}
