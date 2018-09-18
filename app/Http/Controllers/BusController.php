<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use Image;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses = Bus::orderBy('id', 'asc')->paginate(8);
        return view('buses.index')->withbuses($buses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'no' => 'required|max:7',
            'name' => 'required|max:255',
            'from'  => 'required', 
            'depar' => 'date_format:"H:i"|required',
            'to' => 'required',
            'seats' => 'required',
            'featured_img' => 'sometimes|image',
            'price' => 'required'
        ));
        //store in the database
        $bus = new Bus;

        $bus -> no=$request->no;
        $bus -> name=$request->name;
        $bus -> from=$request->from;
        $bus -> depar=$request->depar;
        $bus -> to= $request->to;
        $bus -> seats= $request->seats;

         if ($request->hasFile('featured_img')) {
          $image = $request->file('featured_img');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('image/' . $filename);
          Image::make($image)->resize(300, 300)->save($location);

          $bus->photo = $filename;
        }
        $bus -> price= $request->price;

        $bus->save();

        return redirect() -> route('bus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $bus = Bus::find($id);
        // return view('buses.show')->withbus($bus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus = Bus::find($id);
        return view('buses.edit')->withbus($bus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //update to the database
        $bus = Bus::find($id);

        $bus->update($request->all());

        return redirect() -> route('bus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Bus $bus)
    {
        Bus::destroy($bus->id);   

        return redirect() -> route('bus.index');
    }
}
