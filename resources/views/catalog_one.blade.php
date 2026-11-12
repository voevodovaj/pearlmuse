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

      <li>
        <span class="text-gray-400 mx-1">›</span>
      </li>

      {{-- Каталог --}}
      <li class="inline-flex items-center">
        <a href="/catalog" class="text-gray-700 hover:text-gray-900 text-sm font-medium">

          Catalog
        </a>
      </li>

      {{-- Категория --}}
      <li>
        <div class="flex items-center">
          <span class="text-gray-400 mx-1">›</span>
          <span class="text-gray-500 ml-1 md:ml-2 text-sm font-medium">
            {{ $catalog->name }}
          </span>
        </div>
      </li>

    </ol>
  </nav>
</div>

<div class="wrapper">

  <h1 class="text-3xl font-bold mb-6">{{$catalog->name}}</h1>

  <div class="w-full grid grid-cols-3 gap-2">
    @foreach($products as $product)
    <a href="{{ url('/product/' . $product->id) }}"
      class="block bg-white rounded-2xl shadow-2xl overflow-hidden hover:shadow-3xl">
      <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-indigo-600 opacity-75"></div>
        <img src="{{asset('storage/'.$product->picture)}}" alt="{{$product->name}}" class="w-full h-64 object-cover object-center relative z-10">
        <div
          class="absolute top-4 right-4 bg-gray-100 text-xs font-bold px-3 py-2 rounded-full z-20 transform rotate-12">
          {{$product->status}}
        </div>
      </div>
      <div class="p-6">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-2">{{$product->name}}</h2>
        <p class="text-gray-600 mb-4">{{$product->small_description}}</p>
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-indigo-600">${{$product->price}}</span>
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
              fill="currentColor">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <span class="ml-1 text-gray-600">4.9 (120 reviews)</span>
          </div>
        </div>
        <button
          onclick="event.preventDefault(); event.stopPropagation();"
          class="w-full bg-indigo-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-indigo-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">

          Add to Cart

        </button>
      </div>
      @endforeach
    </a>



  </div>
</div>

  @endsection