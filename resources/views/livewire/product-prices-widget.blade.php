<div>
{{$record->name}}
<div class="bg-green-200 min-h-screen flex items-center">
    <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
        <form action="{{asset('product/'.$record->id.'/add_price')}}" method=post>
@csrf
            <div class="flex items-center mb-5">
                <label for="type" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Type</label>
                <input name="type" id="type" type="text" placeholder="Enter characteristic name" class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
            </div>

  <div class="flex items-center mb-5">
                <label for="type_description" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Type</label>
                <input name="type_description" id="type_description" type="text" placeholder="Enter characteristic value" class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
            </div>


            <div class="flex items-center mb-10">
                <label for="price" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Price</label>
                <input type="text" name="price" id="price" placeholder="Enter price" class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
            </div>
            <div class="text-right">
                <button class="py-3 px-8 bg-green-500 text-green-100 font-bold rounded">Submit</button>
            </div>
        </form>
    </div>
</div>



</div>