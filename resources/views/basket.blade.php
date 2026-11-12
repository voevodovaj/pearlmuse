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

<div class="flex justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form method="post" action="{{asset('order')}}">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Full Name
                </label>
                <input type="text" name="username" id="username" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                    Phone Number
                </label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                    Email Address
                </label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
        
           

            <div class="mb-5 pt-3">
                <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                    Address Details
                </label>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <select id="country" name="country" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="belarus">Belarus</option>
                                <option value="russia">Russia</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="city" id="city" placeholder="Enter city"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="address" id="address" placeholder="Enter address"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="post_code" id="post_code" placeholder="Post Code"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Book Appointment
                </button>
            </div>
        </form>
    </div>
</div>

    </div>
</div>



    </div>
</section>

@endsection