<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Inertia\Inertia;

class YandexReviewsController extends Controller
{
    public function index(User $user): \Inertia\Response
    {
        $yandexMapSetting = $user->settings()->where('code', 'yandexLink')->first();

        $yandexMapValue = $yandexMapSetting ? $yandexMapSetting->pivot->value : null;

        $number = Str::of($yandexMapValue)
            ->explode('/')
            ->filter(fn ($part) => is_numeric($part))
            ->first();

        return Inertia::render('YandexReviews/Index', [
            'url' => $yandexMapValue,
            'urlComments' => 'https://yandex.ru/maps-reviews-widget/'.$number.'?comments',
        ]);
    }
}
