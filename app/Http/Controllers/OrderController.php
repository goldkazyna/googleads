<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'telegram' => 'required|string|max:255',
            'tariff'   => 'nullable|string|max:255',
        ]);

        try {
            Mail::raw(
                "Новая заявка с сайта\n" .
                "========================\n\n" .
                "Тариф:    {$validated['tariff']}\n" .
                "Имя:      {$validated['name']}\n" .
                "Email:    {$validated['email']}\n" .
                "Telegram: {$validated['telegram']}\n",
                function ($message) use ($validated) {
                    $message->to('goldkazyna5@gmail.com')
                            ->replyTo($validated['email'])
                            ->subject("Новая заявка: {$validated['tariff']}");
                }
            );

            return back()->with('success', 'Заявка отправлена! Мы свяжемся с вами в ближайшее время.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ошибка отправки. Попробуйте ещё раз или напишите нам в Telegram.');
        }
    }
}
