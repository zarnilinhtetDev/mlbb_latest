<?php

namespace App\Http\Controllers;

use App\Models\UploadCoinHistory;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UploadCoinHistoryController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $histories = UploadCoinHistory::where('user_id', $id)->get();

        return view('blade.uploadCoin.uploadCoinHistory', compact('histories', 'user'));
    }
}
