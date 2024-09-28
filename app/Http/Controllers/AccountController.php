<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log; // Импортируем класс Log

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function edit()
    {

        return view('account.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $request->validate([
            'avatar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Логика удаления старого аватара, если он есть
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Загрузка нового аватара
        $path = $request->file('avatar')->store('avatars', 'public');

        // Обновление пути в базе данных
        $user->avatar = $path;
        $user->save(); // Этот метод теперь должен распознаваться без ошибок

        return redirect()->route('account.edit');
    }

}
