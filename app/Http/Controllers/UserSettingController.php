<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserSettingController extends Controller
{
    /**
     * Показать форму редактирования настроек пользователя.
     */
    public function edit(User $user): \Inertia\Response
    {
        // Получаем все настройки пользователя
        $settings = $user->settings()->withPivot('value')->get();

        return Inertia::render('UserSettings/Edit', [
            'user' => $user,
            'settings' => $settings,
        ])->with('flash', [
                'success' => session('success'),
                'warning' => session('warning'),
                'error' => session('error'),
            ]);
    }

    /**
     * Обновить настройки пользователя.
     */
    public function update(Request $request, User $user): \Illuminate\Http\RedirectResponse
    {
        // Обновляем настройки пользователя
        foreach ($request->settings as $settingId => $value) {
            $user->settings()->updateExistingPivot($settingId, ['value' => $value]);
        }

        return redirect()->route('user.settings.edit', $user)->with('success','Настройки обновлены!');
    }
}
