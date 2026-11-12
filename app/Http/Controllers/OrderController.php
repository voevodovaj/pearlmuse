<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function postIndex(Request $request)
    {
        $user_id = Auth::user()?->id;
        $numericKeysCookies = [];

        // Перебираем все куки, которые браузер прислал в запросе

        foreach ($_COOKIE as $key => $value) {

            // preg_match возвращает 1, если в строке $key найдена хотя бы одна цифра
            if (preg_match('/\d/', $key)) {
                // Добавляем куку в наш новый массив
                $numericKeysCookies[$key] = $value;
            }
        }
        $serialize = serialize($numericKeysCookies);
        $data = $serialize;
        $data_json = json_encode($numericKeysCookies);
        $request->merge(['data' => $data]);
        $request->merge(['data_json' => $data_json]);
        $request->merge(['user_id' => $user_id]);
        Order::create($request->all());

        foreach ($_COOKIE as $key => $value) {

            // preg_match возвращает 1, если в строке $key найдена хотя бы одна цифра
            if (preg_match('/\d/', $key)) {
                // Добавляем куку в наш новый массив
                setcookie($key, '', time() - 1, '/');
            }
        }
        return redirect('/');
    }
}
