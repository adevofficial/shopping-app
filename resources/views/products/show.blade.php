@extends('layouts.main') 
@section('content')
<div class="mt-4 border shadow-sm bg-white p-4">

    <div class="row">

        <div class="col">

        </div>
        <div class="col border-left">
            <h4>
                {{$ProductData['product_name']}}
            </h4>

            <div class="row">
                <div class="col-3 text-muted font-weight-bold">Price</div>
                <div class="col-9">{{$ProductData['price']}}</div>

                <div class="col-3 text-muted font-weight-bold">Highlights</div>
                <div class="col-9">{{$ProductData['small_desc']}}</div>
                <div class="col-12">
                    <div class="d-flex justify-content-between mt-3 align-items-center">
                        <button class="btn py-3 font-weight-bold btn-primary btn-block mr-4">ADD TO CART</button>
                        <button class="btn py-3 font-weight-bold btn-primary btn-block mt-0">BUY NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection