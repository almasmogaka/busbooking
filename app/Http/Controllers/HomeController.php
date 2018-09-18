<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\Customer;
use Image;
use PDF;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function book() {        

        $buses = Bus::orderBy('depar', 'asc')->paginate(8);
        return view('book')->withbuses($buses);
    }
    //homepage
    public function return() {        

        return view('book.return');
    }
    public function oneway() {        

        return view('book.oneway');
    }
    //customer book
    public function create($id) {
        $bus = Bus::find($id);
        return view('book.book', compact('bus'));
    }
    public function store(Request $request) {
        
        $this->validate($request, array(
            'seat' => 'required',
            'bus_id' => 'required',
            'name' => 'required',
            'phone' => 'required', 
            'serial'=> 'integer'            
        ));
        //store in the database
        $customer = new Customer;

        $customer -> seat=$request->seat;
        $customer -> bus_id=$request->bus_id;        
        $customer -> name=$request->name;
        $customer -> phone=$request->phone;
        $customer -> serial=rand(); 
        
        //update the seats number
        DB::table('buses')->where('id',$request->bus_id)->decrement('seats');

        $customer->save();

        return redirect() -> route('welcome');
    }

    public function welcome()
    {
        return view('book.welcome');
    }

    public function receipt($id)
    {
         $cust = Customer::find($id);
         $buses = Bus::all();

         $pdf = PDF::loadView('book.show',  compact('cust, buses'));
 
         return $pdf->stream('receipt.pdf');
         
    }

}
