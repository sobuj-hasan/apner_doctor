<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Consultant;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use App\Models\ContactProperty;
use App\Models\NewArrival;
use App\Models\Property;
use App\Models\Service;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function our_doctor(){
        $data['products'] = Service::where('status', 1)->inRandomOrder()->limit(80)->get();
        return view('our_doctors', $data);
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactus');
    }

    public function hospital_service(){
        return view('our_service');
    }

    public function form_submit(){
        return view('form_submit');
    }


}
