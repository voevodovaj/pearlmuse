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
          <a href="{{ url('/catalog/' . $catalog->id) }}"
            class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">
            {{ $catalog->name }}
          </a>
        </div>
      </li>

      {{-- Товар --}}
      <li>
        <div class="flex items-center">
          <span class="text-gray-400 mx-1">›</span>
          <span class="text-gray-500 ml-1 md:ml-2 text-sm font-medium">
            {{ $product->name }}
          </span>
        </div>
      </li>

    </ol>
  </nav>
</div>


<div>
  <div class="wrapper py-8">
    <div class="flex flex-wrap -mx-4">

      <!-- Product Image -->
      <div class="w-full md:w-1/2 px-4 mb-8">
        <img
          src="{{ asset('storage/' . $product->picture) }}"
          alt="{{ $product->name }}"
          class="w-full h-auto rounded-lg shadow-md">
      </div>

      <!-- Product Details -->

      <div class="w-full md:w-1/2 px-4">
        <form action="{{asset('product/'.$product->id.'/add_to_basket')}}">
          @csrf
          <input type="hidden" name="product_id" value="{{$product->id}}" />
          @if(!$product->prices()->exists())
          <input type="hidden" name="price" value="0">
          @endif
          <h2 class="text-3xl font-bold mb-6">
            {{ $product->name }}
          </h2>

          <div class="mb-4">
            <span id="product-price" class="text-2xl font-bold mr-2">
              @if(!$product->prices()->exists())
              ${{ $product->price }}
              @endif
            </span>
          </div>

          <p class="text-gray-700 mb-6">
            {{ $product->small_description }}
          </p>
          @if($product->prices)
          <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Size:</h3>

            <div class="flex space-x-2">
              @foreach($product->prices as $price)




              <div>
                <label class="flex text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                  <input type="radio" required name="price" value="{{$price->id}}" data-price="{{$price->price}}" @if($loop->first) checked @endif>
                  <i class="pl-2">{{$price->type_description}}</i>
                </label>



              </div>




              @endforeach
            </div>
          </div>
          @endif
          <div class="mb-6">
            <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">
              Quantity:
            </label>

            <input
              type="number"
              id="quantity"
              name="quantity"
              min="1"
              value="1"
              class="w-12 text-center rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
          </div>

          <div class="flex space-x-4 mb-6">

            <button type=submit class="catalog-main-button-icon">

              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg>

              Add to Cart
            </button>

            <button
              class="catalog-card-button-icon">

              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
              </svg>

              Wishlist
            </button>

          </div>

          <!-- Product Description -->
          <div class="text-gray-700">
            {!! $product->description !!}
          </div>

      </div>
      </form>
    </div>
  </div>
</div>
@push('scripts')
<script>
  const radios = document.querySelectorAll('input[name="price"][type="radio"]');

  if (radios.length) {
    const storageKey = 'selected-price-{{ $product->id }}';
    const saved = sessionStorage.getItem(storageKey);

    // Проверяем, сохранён ли предыдущий выбор
    if (saved) {
      try {
        const selection = JSON.parse(saved);
        const isValid = Date.now() - selection.savedAt < 30 * 60 * 1000;

        const savedRadio = Array.from(radios).find(
          radio => radio.value === selection.priceId
        );

        if (isValid && savedRadio) {
          savedRadio.checked = true;
        } else {
          sessionStorage.removeItem(storageKey);
        }
      } catch {
        sessionStorage.removeItem(storageKey);
      }
    }

    // Обновляем отображаемую цену
    const updatePrice = radio => {
      document.getElementById('product-price').textContent = '$' + radio.dataset.price;
    };

    const selectedRadio = document.querySelector('input[name="price"]:checked');

    if (selectedRadio) {
      updatePrice(selectedRadio);
    }

    // Сохраняем выбор при переключении
    radios.forEach(radio => {
      radio.addEventListener('change', function() {
        sessionStorage.setItem(storageKey, JSON.stringify({
          priceId: this.value,
          savedAt: Date.now()
        }));

        updatePrice(this);
      });
    });
  }
</script>
@endpush

@endsection