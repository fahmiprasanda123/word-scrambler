<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\Score;

class WordController extends Controller
{
    public function index(){
        return view('word');
    }
    public function word(Request $request){
        $input = $request->all();
        Log::info($input);
        $score = 0;
        $score2 = 0;
        $score3 = 0;
        $score4 = 0;
        $score5 = 0;
        $score6 = 0;
        $score7 = 0;
        $score8 = 0;
        $score9 = 0;
        $score10 = 0;

        $word1 = $request->get('word1');
        $word2 = $request->get('word2');
        $word3 = $request->get('word3');
        $word4 = $request->get('word4');
        $word5 = $request->get('word5');
        $word6 = $request->get('word6');
        $word7 = $request->get('word7');
        $word8 = $request->get('word8');
        $word9 = $request->get('word9');
        $word10 = $request->get('word10');
        if($word1 == 'ant'){
            $score = 10;
        }
        if($word2 == 'alpaca'){
            $score2 = 10;
        }
        if($word3 == 'beagle'){
            $score3 = 10;
        }
        if($word4 == 'bee'){
            $score4 = 10;
        }
        if($word5 == 'bat'){
            $score5 = 10;
        }
        if($word6 == 'beaver'){
            $score6 = 10;
        }
        if($word7 == 'bear'){
            $score7 = 10;
        }
        if($word8 == 'beetle'){
            $score8 = 10;
        }
        if($word9 == 'bird'){
            $score9 = 10;
        }
        if($word10 == 'buffalo'){
            $score10 = 10;
        }



          $total_score = $score + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
            //  return response()->json(['success'=>$total_score]);
            //  return view('result_word', compact('input','total_score'));

        // $data = array('status' =>'success','url' => '/getword/'.$total_score.'/'.$word1.'/'.$word2.'/'.$word3.'/'.$word4.'/'.$word5.'/'.$word6.'/'.$word7.'/'.$word8.'/'.$word9.'/'.$word10);
        $data = array('status' =>'success','url' => '/getword/'.$total_score.'/'.$word1.'/'.$word2.'/'.$word3.'/'.$word4.'/'.$word5.'/'.$word6.'/'.$word7.'/'.$word8.'/'.$word9.'/'.$word10);
        return response()->json($data);
    }
    public function getword($total_score,$input,$input2,$input3,$input4,$input5,$input6,$input7,$input8,$input9,$input10){
        $score = $total_score;
        return view('result_word',compact('score','input','input2','input3','input4','input5','input6','input7','input8','input9','input10'));
    }
    public function score(Request $request){
        $score = $request->score;
        $name = $request->name;

        $save = Score::firstOrCreate([
            'name' => $name,
            'score' => $score
        ]);

        return response()->json(['success'=> 'Your Score Has Been Submited']);
    }
    public function welcome(){
        $score = Score::all();
        return view('welcome', compact('score'));
    }
}
