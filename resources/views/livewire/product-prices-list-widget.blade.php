<div>
@foreach($record->prices as $price)

<div>
<span title="{{$price -> type}}: {{$price -> type_description}}">{{$price -> price}}</span>
<sup>
<a href="{{asset('product_price/'.$price->id.'/del')}}">&times;</a>

</sup>
</div>


@endforeach

</div>