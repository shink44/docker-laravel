<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();

        return view('users.mypage', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = Auth::user();
 
         return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
 
         $user->name = $request->input('name') ? $request->input('name') : $user->name;
         $user->email = $request->input('email') ? $request->input('email') : $user->email;
         $user->game_id = $request->input('game_id') ? $request->input('game_id') : $user->game_id;
         $user->discord_id = $request->input('discord_id') ? $request->input('discord_id') : $user->discord_id;
         $user->update();
 
         return to_route('mypage')->with('message', '登録情報を変更しました');
    }

    public function update_password(Request $request)
    {
         $user = Auth::user();
 
         if ($request->input('password') == $request->input('password_confirmation')) {
             $user->password = bcrypt($request->input('password'));
             $user->update();
         } else {
             return to_route('mypage.edit_password');
         }
 
         return to_route('mypage')->with('message-password', 'パスワードを変更しました');
    }

    public function edit_password()
    {
         return view('users.edit_password');
    }

    public function destroy(Request $request)
    {
        $user = Auth::user();

        if ($user->deleted_flag) {
            $user->deleted_flag = false;
        } else {
            $user->deleted_flag = true;
        }
        $user->update();

        Auth::logout();
        return redirect('/recruitment')->with('message-userout', '退会しました');
    }

}
