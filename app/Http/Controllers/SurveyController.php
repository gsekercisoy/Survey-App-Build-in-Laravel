<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Question;

class SurveyController extends Controller
{
    public function index($id)
    {
        $survey = Survey::findOrFail($id);
        $questions = Question::where('survey_id', $id)->get();

        return view('survey', compact('survey', 'questions'));
    }
}
