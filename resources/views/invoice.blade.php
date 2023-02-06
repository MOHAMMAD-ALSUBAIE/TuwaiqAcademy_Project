@extends('layouts.app')



@section('content')

<div class="card">
  <div class="card-body mx-4">
    <div class="container">
      <p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-black"><h2>{{$row->CostName}}</h2></li>
          <li class="text-muted mt-1"><span class="text-black">Invoice </span>{{$row->id}}</li>
          <li class="text-black mt-1">{{$row->invDate}}</li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>Price</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$row->Price}} SAR
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>Descount</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$row->Diescount}} SAR
          </p>
        </div>

        <div class="col-xl-10">
          <p>Quantity</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$row->Quantity}}
          </p>
        </div>

        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>tax</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$row->Tax}} SAR
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="row text-black">

        <div class="col-xl-12">
          <p class="float-end fw-bold">Total: {{$row->Net}} SAR
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="text-center" style="margin-top: 90px;">
        <a><u class="text-info">View in browser</u></a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>

    </div>
  </div>
</div>

@endsection


