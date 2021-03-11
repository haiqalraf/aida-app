<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function setting2()
    {
        return view('admin.setting2');
    }

    public function update(Request $request)
    {
        auth()->user()->update([
            'username' => $request->username,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'birth_date' => $request->birth_date
        ]);
        return redirect()->route('admin.setting');
    }
    public function gambar()
    {
        return view('admin.gambar');
    }
    public function update2(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            auth()->user()->gambar = $request->file('gambar')->getClientOriginalName();
            auth()->user()->save();
        }
        return redirect()->route('admin.setting');
    }

    public function avatar()
    {
        if (auth()->user()->gambar) {
            Storage::disk('local')->delete('images/' . auth()->user()->gambar);
        }
        auth()->user()->update([
            'gambar' => ''
        ]);
        return redirect()->route('admin.setting');
    }
}
