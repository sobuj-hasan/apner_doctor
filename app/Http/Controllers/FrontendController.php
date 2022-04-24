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
        $data['hospitals'] = NewArrival::where('status', 1)->get();
        $data['categories'] = Category::all();
        $data['doctors'] = Service::where('status', 1)->get();
        return view('index', $data);
    }
    
    public function our_doctor(){
        $data['doctors'] = Service::where('status', 1)->get();
        $data['categories'] = Category::all();
        return view('our_doctors', $data);
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactus');
    }

    public function hospital_service(){
        $data['hospitals'] = NewArrival::where('status', 1)->get();
        return view('our_service', $data);
    }

    public function search_result(Request $request){
        $query = Service::query();
        if ($request->category_id) {
            $data['category_id'] = $request->category_id;
            $query          = $query->where('category_id', "$request->category_id");
        }

        if ($request->given_data) {
            $data['given_data'] = $request->given_data;
            $query          = $query->where('doctor_name', 'like', "%$request->given_data%")
                                    ->orWhere('contact_number', "$request->given_data")
                                    ->orWhere('degree', 'like', "%$request->given_data%")
                                    ->orWhere('working_hospital', 'like', "%$request->given_data%");
        }

        $data['doctors'] = $query->where('status', 1)->limit(20)->get();
        $data['categories'] = Category::all();
        return view('search_result', $data);
    }

    public function form_submit(Request $request){
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        ContactFormSubmit::create($request->all());
        Notify::success('Message Successfully Submited', 'Success');
        return back();
    }


}
