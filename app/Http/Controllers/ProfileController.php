<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
{
    $user = Auth::user();

    return view('profile.show', compact('user'));
}

    public function edit()
    {
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
        ]);

        $user->name = $request->name;
        $user->last_name = $request->last_name;

        return redirect()->back()->with('success', 'Профиль успешно обновлен');
    }
}
