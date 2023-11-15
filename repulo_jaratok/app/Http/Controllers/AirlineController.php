<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index(){
        $airline = response()->json(Airline::all());
        return $airline;
    }

    public function show($id){
        $airline = response()->json(Airline::find($id));
        return $airline;
    }

    public function store(Request $request){
        $airline = new Airline();
        $airline->title = $request->title;
        $airline->description = $request->description;
        $airline->end_date = $request->end_date;
        $airline->user_id = $request->user_id;
        $airline->status = $request->status;
        $airline->save();
    }

    public function update(Request $request, $id){
        $airline = Airline::find($id);
        $airline->title = $request->title;
        $airline->description = $request->description;
        $airline->end_date = $request->end_date;
        $airline->user_id = $request->user_id;
        $airline->status = $request->status;
        $airline->save();
    }

    public function destroy($id){
        Airline::find($id)->delete();
    }

}
