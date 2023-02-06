<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class E_commoreConreoller extends Controller
{
     static $price;
     static $tax;

     static $totalprice;
    //
   public  function Welcome(){
    $phone=[
  
        ['Type' =>'Iphone 14','Price'=>3500 ,'Color'=>'Black'],
        ['Type' =>'Samsung','Price'=>2500 ,'Color'=>'White'],
        ['Type' =>'Huwaui','Price'=>1000 ,'Color'=>'Gold']
         
       ];


        return view('welcome', ['ph' => $phone]);
   }
   public function GetPhoneDatab(){
    $phone=DB::table('test_proudction')->get();// read the get data from table test_proudction that in databases then stor it in $phone varble
        $phone = json_decode($phone, true);// convert to josn array
    // json_encode($phone); //convert array to josn
        //return response()->json($phone);
       // dd($phone);
        return view("showphone", ['ph' => $phone]);
   }
   public function GetPhoneDataid($id){
        $phone = DB::table('test_proudction')->find($id);
   


        return view('checkout', ['ph' => $phone]);
   }
   public function getinvoice(Request $request){


          $price = $request->price;
          $QTY = 1;
          $total = $price * $QTY;
          $tax = $total * 0.15;
          $Alltotal = $total + $tax;
          $desc = 0;
          $net = $total - $desc;
        $invoicdate = date("Y-m-d");
          $custName = $request->name;
          $productName=$request->prodcname;
          $row = [
               'CostName' => $custName,
                'invDate' => $invoicdate,
                'productName'=>$productName,
               'Price'=>$price,
               'Quantity' => $QTY,
               'Tax' => $tax,
               'Diescount' => $desc,
               'Net' => $Alltotal,
          ];


  DB::table('invoic')->insert($row);
          $aftersort=DB::select('select * from invoic order by id desc limit 1');
        return view('invoice',['row'=>$aftersort[0]]);
        
   }

}
