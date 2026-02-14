<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSettingSeeder extends Seeder
{
    public function run(): void
    {
        // Находим пользователя и настройку
        $user = User::find(1);
        $setting = Setting::find(1);

        // Добавляем связь с дополнительными данными
        $user->settings()->attach($setting->id, ['value' => 'https://yandex.ru/maps/org/samoye_populyarnoye_kafe_tsentr/1010501395/reviews/?ll=49.680826%2C58.602742&z=15']);
    }
}
