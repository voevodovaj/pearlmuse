@extends('layouts.base')
@section('content')

<div class="min-h-[70vh] flex items-center justify-center px-4 py-12">

    <div class="bg-white p-8 sm:p-12 rounded-xl shadow-2xl max-w-lg w-full text-center">

        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6">
            {!!$maintext->name!!}
        </h1>

        <div class="text-gray-600">
            {!!$maintext->body!!}
        </div>

    </div>

</div>



@endsection