@extends('layouts.app')
@section('content')


<div class="container">
    
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
         
        </div>
        <div class="col-md-8 order-md-1">
            <a href="{{  route('getPhoneData')   }}" class="btn btn-primary">عودة الى قائمة المنتجات</a>
            <h4 class="mb-3">Checkout address</h4>
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{$ph->title}}</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">السعر</h6>
                        <small class="text-muted"></small>
                    </div>
                    <span class="text-muted">{{$ph->Price}} SAR</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ضريبة</h6>
                        <small class="text-muted">الضريبة الحكومية</small>
                    </div>
                    <span class="text-muted">{{$ph->Price*0.15}} SAR</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small></small>
                    </div>
                    <span class="text-success"></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span> (SAR)</span>
                    <strong>{{$ph->Price*0.15 +$ph->Price}} SAR</strong>
                </li>
            </ul>
  
            <div class='mt-5'>
 <form action="{{route('getinvoice')}}"  method="post">
                @csrf
  <!-- Email input -->
  <input type="hidden" name='prodcname' value='{{$ph->title}}'>
  <input type="hidden" name='price' value='{{$ph->Price}}'>
 


  <div class="form-outline mb-4">
    <input name='name' type="text" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">اخل الاسم</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input name='address' type="text" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">ادخل العنوان</label>
  </div>

  <div class="form-outline mb-4">
    <input name='email' type="email" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">ادخل البريد الاليكتروني</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">الشراء الان</button>
</form>

            </div>
        </div>

  
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2019 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

@endsection