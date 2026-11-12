<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Support\Facades\Redirect;

class BasketController extends Controller
{
    public function getBasket()
    {

        $numericKeysCookies = [];

        // Перебираем все куки, которые браузер прислал в запросе

        foreach ($_COOKIE as $key => $value) {

            // preg_match возвращает 1, если в строке $key найдена хотя бы одна цифра
            if (preg_match('/\d/', $key)) {
                // Добавляем куку в наш новый массив
                $numericKeysCookies[$key] = $value;
            }
        }
        $products = [];
        // Проверяем результат: если массив не пустой, значит, такие куки нашлись
        if (!empty($numericKeysCookies)) {
            $price = 0;
            $quantity = 0;
            foreach ($numericKeysCookies as $index => $cookie_value) {

                $product = Product::find($index);

                $cookie_value_arr = explode(':', $cookie_value);

                if (is_array($cookie_value_arr)) {
                    $quantity = $cookie_value_arr[1];
                    if ($cookie_value_arr[0] == 0) {
                        $price = $product->price;
                    } else {

                        $price = ProductPrice::find($cookie_value_arr[0])->price;
                    }
                }

                $products[$index] = [$product, $price, $quantity];
            }
        }



        return view('basket', compact('products'));
    }

    public function getAddToBasket(Product $product, Request $request)
    {

        $value = $request->price . ':' . $request->quantity;

        setcookie($request->product_id, $value, time() + 30 * 60, '/');

        return redirect('basket');
    }
    public function getDelCookie(Product $product, Request $request)
    {
        if ($_COOKIE) {
            if (isset($_COOKIE[$product->id])) {
                setcookie($product->id, '', time() - 1, '/');
            }
        }
        return redirect()->back();
    }
}
