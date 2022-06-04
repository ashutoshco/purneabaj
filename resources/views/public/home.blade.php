@extends('public.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action">item1</a>
                <a href="" class="list-group-item list-group-item-action">item1</a>
                <a href="" class="list-group-item list-group-item-action">item1</a>
                <a href="" class="list-group-item list-group-item-action">item1</a>
                <a href="" class="list-group-item list-group-item-action">item1</a>
                <a href="" class="list-group-item list-group-item-action">item1</a>
            </div>
        </div>
    <div class="col-9">

    <div class="row">
        @foreach ($it as $item)
            
        
        <div class="col-3">
            <div class="card">
            <img src="{{asset('image/'.$item->image)}}" class="w-100" style=""object-fit:cover alt="">
            <div class="card-body">
                <div class="card-title">
                    <h4>{{$item->price}}</h4>
                    <a href="{{route('view',['id'=>$item->id])}}" class="stretched-link"> </a>
                    <strong>{{$item->title}}</strong>
                </div>
            </div>
            </div>

        </div>
        @endforeach

    </div>
    </div>
    </div>
</div>
@endsection