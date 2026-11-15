<?php

namespace App\Providers\Composers;

use Illuminate\Support\Facades\App;
use Illuminate\Contracts\View\View;

class UriComposer
{
    public function compose(View $view)
    {
        $cookie_count = 0;
        foreach ($_COOKIE as $key => $value) {

            // preg_match возвращает 1, если в строке $key найдена хотя бы одна цифра
            if (preg_match('/\d/', $key)) {
                // Добавляем куку в наш новый массив
                $cookie_value_arr = explode(':', $value);

                $cookie_count += (int) $cookie_value_arr[1];
            }
        }
        $view->with('cookie_count', $cookie_count);
    }
}
