<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class pageController extends Controller
{
    public function index(){

        $sliders=\App\Models\Slider::all();

        $abouts=\App\Models\About::all();

        $whies=\App\Models\Why::all();

        $services=\App\Models\Services::all();

        $works=\App\Models\Work::all();

        $clients=\App\Models\Client::all();

        return view('welcome', compact('sliders', 'abouts', 'whies', 'services', 'works', 'clients'));
    }
    
    public function contact(Request $request){
        if ($request->isMethod('GET')) {
            return back();
        }else{
            Contact::create($request->all());
            return redirect()->route('home');
        }
    }

}
