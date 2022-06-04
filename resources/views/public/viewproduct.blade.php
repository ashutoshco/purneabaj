@extends("public.master")
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="col-lg-6">
                <div class="card">
                    <img src="{{asset('image/'.$P->image)}}" alt="">
                    <div class="card-body">

                    </div>
                    <div class="card-title d-flex">
                        <a href="{{route('showcart')}}" class=" btn btn-danger w-50">AddCart</a>
                        <a href="" class=" btn btn-success w-50">BuyNOW</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
</div>

@endsection