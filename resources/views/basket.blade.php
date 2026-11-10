@extends('layouts.base')
@section('content')

<nav class="flex mb-5" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2">
        <li class="inline-flex items-center">
            <a href="/catalog" class="text-gray-700 hover:text-gray-900 inline-flex items-center">
                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                    </path>
                </svg>
                Корзина
            </a>
        </li>
    </ol>
</nav>

<section>
    <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-screen-xl">


<div class="flex items-center justify-center h-screen">
   <div class="overflow-x-auto">
        <table class="w-full bg-white shadow-md rounded-lg border border-gray-200">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 text-left text-gray-600 font-medium">Product Name</th>
                    <th class="px-6 py-4 text-left text-gray-600 font-medium">Unit Price</th>
                    <th class="px-6 py-4 text-left text-gray-600 font-medium">Qty</th>
                    <th class="px-6 py-4 text-left text-gray-600 font-medium">Total</th>
                    <th class="px-6 py-4 text-left text-gray-600 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                $total = 0;
                @endphp
                @foreach($products as $product);
                   @php
                $sum = $product[1]*$product[2];
                $total += $sum;
                @endphp
                <tr class="border-b">
                    <td class="px-6 py-4 flex items-center gap-4">
                        <img src="{{asset('storage/'.$product[0]->picture)}}" alt="Product" class="w-12 h-12 rounded-md">
                        <div>
                            <p class="text-gray-800 font-medium">{{$product[0]->name}}</p>
        
                        </div>
                    </td>
                    <td class="px-6 py-4">{{$product[1]}}</td>
                    <td class="px-6 py-4">{{$product[2]}}</td>
                    <td class="px-6 py-4 font-semibold text-gray-900">{{$sum}}</td>
                    <td><a href="{{asset('product_cookie_del/'.$product[0]->id)}}">&times;</a></td>
                </tr>
    @endforeach
    <tr>
       <td colspan="3">
        <p>Total</p>
       </td> 
       <td>
        {{$total}}
       </td> 
    </tr>
            </tbody>
        </table>
    </div>
</div>


    </div>
</section>

@endsection