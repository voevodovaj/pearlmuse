@extends('layouts.base')
@section('content')

<div class="wrapper">
    <nav class="flex mb-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
            {{-- Главная --}}
            <li class="inline-flex items-center">
                <a href="/" class="text-gray-700 hover:text-gray-900 text-sm font-medium">
                    Home
                </a>
            </li>



            {{-- КОрзина --}}
            <li class="inline-flex items-center">
                <div class="flex items-center">
                    <span class="text-gray-400 mx-1">›</span>
                    <span class="text-gray-500 ml-1 md:ml-2 text-sm font-medium">

                        Basket
                    </span>
                </div>
            </li>
        </ol>
    </nav>
</div>

<section>
    <div class="wrapper">

        <h1 class="text-4xl text-left mb-10">
            Basket
        </h1>



        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-8">
            <div class="overflow-x-auto">
                <h2 class="text-3xl mb-8">
                    Order Details
                </h2>
                <table class="w-full min-w-[600px]">
                    <thead>
                        <tr class="border-b">
                            <th class="px-4 py-4 text-left">Product Name</th>
                            <th class="px-4 py-4 text-left">Unit Price, $</th>
                            <th class="px-4 py-4 text-left">Qty</th>
                            <th class="px-4 py-4 text-left">Total, $</th>
                            <th class="px-4 py-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total = 0;
                        @endphp
                        @foreach($products as $product)
                        @php
                        $sum = $product[1]*$product[2];
                        $total += $sum;
                        @endphp
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-5">
                                <div class="flex items-center gap-4">
                                    <img
                                        src="{{ asset('storage/'.$product[0]->picture) }}"
                                        alt="{{ $product[0]->name }}"
                                        class="w-16 h-16 object-cover rounded-md">

                                    <span class="font-medium">
                                        {{ $product[0]->name }}
                                    </span>
                                </div>
                            </td>
                            <td class="px-4 py-5">{{$product[1]}}</td>
                            <td class="px-4 py-5">{{$product[2]}}</td>
                            <td class="px-4 py-5 font-medium">{{$sum}}</td>
                            <td class="px-4 py-5">
                                <a href="{{asset('product_cookie_del/'.$product[0]->id)}}"
                                    class="text-gray-500 hover:text-[#a8844d] text-4xl"
                                    aria-label="Remove product">
                                    &times;</a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" class="px-4 py-5 font-semibold">
                                <p>Total</p>
                            </td>
                            <td class="px-4 py-5 font-semibold">
                                {{$total}}
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">

            <h2 class="text-3xl mb-8">
                Checkout Details
            </h2>
            <h3 class="text-xl font-medium mt-8 mb-5">
                Client
            </h3>

            <form method="post" action="{{asset('order')}}">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="username" class="block mb-2">
                            Full Name
                        </label>
                        <input type="text" name="username" id="username" placeholder="Full Name"
                            class="w-full rounded-md border border-gray-300 px-4 py-3 focus:border-[#a8844d] focus:outline-none" />
                    </div>

                    <div>
                        <label for="phone" class="block mb-2">
                            Phone Number
                        </label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                            class="w-full rounded-md border border-gray-300 px-4 py-3 focus:border-[#a8844d] focus:outline-none" />
                    </div>

                    <div>
                        <label for="email" class="block mb-2">
                            Email Address
                        </label>
                        <input type="email" name="email" id="email" placeholder="Enter your email"
                            class="w-full rounded-md border border-gray-300 px-4 py-3 focus:border-[#a8844d] focus:outline-none" />
                    </div>

                </div>

                <h3 class="text-xl font-medium mt-8 mb-5">
                    Address
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <div class="mb-5 pt-3">
                        <label for="country" class="block mb-2">
                            Country
                        </label>
                        <select id="country" name="country" class="w-full rounded-md border border-gray-300 px-4 py-3 focus:border-[#a8844d] focus:outline-none">
                            <option value="belarus">Belarus</option>
                            <option value="russia">Russia</option>
                        </select>
                    </div>



                    <div class="mb-5 pt-3">
                        <label for="city" class="block mb-2">
                            City
                        </label>
                        <input type="text" name="city" id="city" placeholder="Enter city"
                            class="w-full rounded-md border border-gray-300 px-4 py-3 focus:border-[#a8844d] focus:outline-none" />
                    </div>

                    <div>
                        <label for="address" class="block mb-2">
                            Address
                        </label>

                        <input type="text" name="address" id="address" placeholder="Enter address"
                            class="w-full rounded-md border border-gray-300 px-4 py-3 focus:border-[#a8844d] focus:outline-none" />
                    </div>


                    <div>
                        <label for="post_code" class="block mb-2">
                            Post Code
                        </label>

                        <input type="text" name="post_code" id="post_code" placeholder="Post Code"
                            class="w-full rounded-md border border-gray-300 px-4 py-3 focus:border-[#a8844d] focus:outline-none" />
                    </div>

                </div>
                <div class="mt-8">
                    <button
                        type="submit"
                        class="main-button">
                        Place Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection