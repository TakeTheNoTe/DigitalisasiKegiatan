<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Log;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EvaluasibController extends Controller
{
    public function evaluasib ($id,$name)
    {
        $user = Auth::user();
        $quest = DB::table('questions')
        ->select('id','question')
        ->distinct()
        ->get();

        return view('evaluasib', compact('user','quest','id','name'));
    }

    public function inserte(Request $request, $id, $ids, $name, $names, $desc)
    {
        $ans1 = new Answer; 

        $ans1->id_activities = $id;
        $ans1->id_participants = $ids;
        $ans1->participants = $name;
        $ans1->question = $request->input('quest1');
        $ans1->answer = $request->input('answer1');
        $ans1->save();

        $ans2 = new Answer;

        $ans2->id_activities = $id;
        $ans2->id_participants = $ids;
        $ans2->participants = $name;
        $ans2->question = $request->input('quest2');
        $ans2->answer = $request->input('answer2');
        $ans2->save();

        $ans3 = new Answer;

        $ans3->id_activities = $id;
        $ans3->id_participants = $ids;
        $ans3->participants = $name;
        $ans3->question = $request->input('quest3');
        $ans3->answer = $request->input('answer3');
        $ans3->save();

        $ans4 = new Answer;

        $ans4->id_activities = $id;
        $ans4->id_participants = $ids;
        $ans4->participants = $name;
        $ans4->question = $request->input('quest4');
        $ans4->answer = $request->input('answer4');
        $ans4->save();

        $ans5 = new Answer;

        $ans5->id_activities = $id;
        $ans5->id_participants = $ids;
        $ans5->participants = $name;
        $ans5->question = $request->input('quest5');
        $ans5->answer = $request->input('answer5');
        $ans5->save();

        $ans6 = new Answer;

        $ans6->id_activities = $id;
        $ans6->id_participants = $ids;
        $ans6->participants = $name;
        $ans6->question = $request->input('quest6');
        $ans6->answer = $request->input('answer6');
        $ans6->save();

        $ans7 = new Answer;

        $ans7->id_activities = $id;
        $ans7->id_participants = $ids;
        $ans7->participants = $name;
        $ans7->question = $request->input('quest7');
        $ans7->answer = $request->input('answer7');
        $ans7->save();

        $ans8 = new Answer;

        $ans8->id_activities = $id;
        $ans8->id_participants = $ids;
        $ans8->participants = $name;
        $ans8->question = $request->input('quest8');
        $ans8->answer = $request->input('answer8');
        $ans8->save();

        $ans9 = new Answer;

        $ans9->id_activities = $id;
        $ans9->id_participants = $ids;
        $ans9->participants = $name;
        $ans9->question = $request->input('quest9');
        $ans9->answer = $request->input('answer9');
        $ans9->save();

        $ans10 = new Answer;

        $ans10->id_activities = $id;
        $ans10->id_participants = $ids;
        $ans10->participants = $name;
        $ans10->question = $request->input('quest10');
        $ans10->answer = $request->input('answer10');
        $ans10->save();

        $log = new Log;

        $log->id_participants = $ids;
        $log->participants = $name;
        $log->activities = $names;
        $log->description = $desc;
        $log->save();

        return redirect('evaluasi');
    }
}
