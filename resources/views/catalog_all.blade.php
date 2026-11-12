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



            {{-- Каталог --}}
            <li class="inline-flex items-center">
                <div class="flex items-center">
                    <span class="text-gray-400 mx-1">›</span>
                    <span class="text-gray-500 ml-1 md:ml-2 text-sm font-medium">

                        Catalog
                    </span>
                </div>
            </li>
        </ol>
    </nav>
</div>

<section>
    <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-screen-xl">

        <div class="mt-6 border-t pt-12 space-y-20">

            @foreach($catalogs as $catalog)

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-24 items-center">
                <div>
                    <span class="text-gray-600 uppercase text-xs font-medium">
                        {{$catalog->name}} BY PEARL MUSE
                    </span>

                    <div class="text-gray-700 mt-8 text-balance">
                        {!! $catalog->description !!}
                    </div>

                    <a href="{{ url('/catalog/' . $catalog->id) }}"
                        class="inline-flex items-center gap-3 mt-8 px-8 py-3 rounded-full bg-gray-900 text-white text-sm hover:bg-gray-700 transition">

                        {{ $catalog->name }}

                        <span>→</span>
                    </a>
                </div>

                {{-- Изображение --}}
                <div class="@if($loop->odd) md:order-first @endif">
                    <img
                        src="{{ asset('storage/' . $catalog->image) }}"
                        alt="{{ $catalog->name }}"
                        class="bg-gray-200 overflow-hidden aspect-square w-full h-full object-cover object-center">
                </div>

            </div>

            @endforeach

        </div>
    </div>
</section>

@endsection