<?php

namespace App\Http\Controllers;
use App\Models\Breakdown;
use Illuminate\Http\Request;
use App\Models\Random;






class RandomController extends Controller
{
    public function index(){
        $randoms = Random::factory(rand(5, 10))->create();
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();
        $randoms->push();
        foreach($randoms as $random){
        $breakdown = Breakdown::factory(rand(5,10))->create(['random_id' => $random->id]);
        }
        $breakdown->push();

        
        return view('welcome', [
            'randoms' => Random::where('created_at', $current_date_time)->get(),
            'breakdowns' => Breakdown::all()
        
        ]);
    }
}
