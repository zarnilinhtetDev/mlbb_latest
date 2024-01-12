<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Credit;
use Illuminate\Http\Request;
use App\Models\UploadCoinHistory;

use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function user_register()
    {
        $upload_coin_histories = UploadCoinHistory::latest()->get();
        $showUser_data =  User::latest()->get();
        $coins = Credit::latest()->get();
        return view('blade.user.user', compact('showUser_data', 'coins', 'upload_coin_histories'));
    }

    public function user_store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|regex:/^[a-zA-Z0-9_.+-]+@gmail.com$/i',
            'password' => 'required',
            'userRole' => 'required'
        ], [
            'userRole' => 'Choose  One',

        ]);
        $existingUser = User::where('email', $data['email'])->first();
        // return $data['userRole'];

        if ($existingUser) {
            return redirect()->back()->with('error', 'Email address already exists.');
        } else {
            // dd($request->input('userRole', true));
            // var_dump($request->input('userRole', true));
            // return $request->userRole;
            // User::create([
            //     'name' => $data['name'],
            //     'email' => $data['email'],
            //     // 'is_admin' => $request['userRole'],
            //     // 'is_admin' => $request->userRole,
            //     'is_admin' => $request->input('userRole', true),
            //     'password' => Hash::make($data['password']),

            // ]);
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->is_admin = $data['userRole'];
            $user->password = Hash::make($data['password']);
            $user->save();



            return redirect()->back()->with('success', 'User registration is successful');
        }
    }

    public function delete_user($id)
    {
        $user_delete = User::find($id);
        $user_delete->delete();

        return redirect()->back()->with('delete_success', ' User delete is successful');
    }
    public function userShow($id)
    {

        $userShow = User::find($id);
        return view('blade.user.userEdit', compact('userShow'));
    }
    public function update_user(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'userRole' => 'required'
        ]);

        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $user->name = $data['name'];
        $user->email = $data['email'];


        // Check if a new password is provided, and update the password if needed
        // if ($request->filled('new_password')) {
        //     $user->password = Hash::make($request->input('new_password'));
        // }

        $user->is_admin = $data['userRole'];

        $user->save();

        return redirect('user')->with('success', 'User update is successful');
    }

    public function logout(Request $request)
    {
        // Your logout logic here
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function change(Request $request)
    {
        $users = User::findOrFail($request->id);

        $users->is_admin = 2;
        $users->update();
        return redirect()->back()->with('change_success', 'User update successfully');
    }


    public function upload_coin($request)
    {
        $user = User::find($request);
        return view('blade.uploadCoin.uploadCoin', compact('user'));
    }

    public function store_coin(Request $request)
    {

        $coin_history = new UploadCoinHistory();
        $coin_history->user_id = $request->user_id;
        $coin_history->coin_balance = $request->coin;
        $coin_history->save();

        $existingCoin = Credit::where('user_id', $request['user_id'])->first();
        if ($existingCoin) {
            $existingCoin = Credit::where('user_id', $request['user_id'])->first();
            $existingCoin->coin_balance = $existingCoin->coin_balance + $request->coin;
            $existingCoin->update();
            return redirect(route('user'))->with('success', 'Coin Added successfully');
        } else {
            $credit = new Credit();
            $credit->user_id = $request->user_id;
            $credit->coin_balance = $request->coin;
            $credit->save();
            return redirect(route('user'))->with('success', 'Coin Added successfully');
        }
    }
}
