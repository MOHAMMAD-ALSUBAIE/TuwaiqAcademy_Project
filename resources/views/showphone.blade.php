@extends('layouts.app')


@section("content")
<div class=" container text-cneter">

    <div class='row'>   
@foreach($ph as $item)

        <div class='col-3'>
            <div class='card mb-5'>
                <div class='card-header'>
                <h3>{{$item['title']}}</h3>
                </div>
                <div class='card-body text-center'>
                    
                    <div><img width='220px' height='220px' src='https://cdn-icons-png.flaticon.com/512/15/15874.png'></div>
                     <div class='text-success my-2'> <h5>Price :{{$item['Price']}}</h5></div>
                     <a href='{{ route("checkoutid",[$item["id"] ] )  }}' class='btn btn-primary'>Buy</a>
                     
                </div>
                <div class='card-footer'>
                
                </div>
            </div>
        </div>


 


@endforeach
</div>
</div>
@endsection