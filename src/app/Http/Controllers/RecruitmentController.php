<?php

namespace App\Http\Controllers;

use App\Rules\TestOriginalRule;
use App\Models\Recruitment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\MessageBag;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Auth;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchModel = $request->input('searchModel');

        $searchGame = $request->input('searchGame');

        $searchRank = $request->input('searchRank');

        $query = Recruitment::query(); 

        $user = Auth::user();

        if(!empty($searchModel)) {
            $query->where('model_name', 'LIKE', "%{$searchModel}%")
                  ->where('game_mode', 'LIKE', "%{$searchGame}%")
                  ->where('rank', 'LIKE', "%{$searchRank}%");
                $recruitments = $query->paginate(20);
        } else {

        $recruitments = Recruitment::orderBy("id", "desc")->paginate(20);
      }
      return view('recruitments.index',compact('recruitments', 'searchModel', 'searchGame', 'searchRank', 'user'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

            $request->validate([
                'game_id' => 'required',
            ]);

            $entryform = $request->only('model_name', 'game_mode', 'rank', 'purpose', 'applicant', 'game_id', 'discord_id', 'content', 'created_at');
            
                $entry = new recruitment();
	            $entry->model_name = $entryform["model_name"];
                $entry->game_mode = $request->input('game_mode');
                $entry->rank = $request->input('rank');
                $entry->purpose = $request->input('purpose');
                $entry->applicant = $request->input('applicant');
                $entry->game_id = $request->input('game_id');
                $entry->discord_id = $request->input('discord_id');
                $entry->content = $request->input('content');                
	            $entry->save();

	            return redirect('/recruitment')->with('message-rm', '募集が投稿されました。');

                
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
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function show(Recruitment $recruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruitment $recruitment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment)
    {
        
    }
}


