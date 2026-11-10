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
                Каталог
            </a>
        </li>
    </ol>
</nav>

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
                            class="bg-gray-200 overflow-hidden aspect-square w-full h-full object-cover object-center"
                        >
                    </div>

                </div>

            @endforeach

        </div>
    </div>
</section>

@endsection