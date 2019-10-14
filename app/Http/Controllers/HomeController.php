<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\Survey;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::get();
        if (Auth::user()->survey==NULL) {
            $survey = Survey::where('deleted_at', NULL)->where('user_id', Auth::user()->id)->first();
            if (!isset($survey)) {
                $step1 = new Survey();
                $step1->user_id = Auth::user()->id;
                $step1->save();
            }
            $survey = Survey::where('deleted_at', NULL)->where('user_id', Auth::user()->id)->first();
            $read= $survey->book_read;
            $exploded = explode(", ", $read);


            $interest = $survey->book_interest;
            $explodedd = explode(", ", $interest);
            return view('survey', compact('survey', 'exploded', 'explodedd', 'category'));
        }
        elseif ( Auth::user()->survey==0) 
        {      
            $surveystatus = "Your Profile is incomplete";
            return view('home', compact('surveystatus'));
        }
        else
        {
            return view('home');
        }
    }

    public function updateprofile(Request $request)
    {
        $user = Survey::where('deleted_at', NULL)->where('user_id', Auth::user()->id)->first();
        $user->books_read = collect($request->books_read)->implode(', ');
        $user->book_interest = collect($request->book_interest)->implode(', ');
        $user->reading_rate = $request->reading_rate;
        $user->reading_hour = $request->reading_hour;
        $user->reason = $request->reason;
        $user->quest = $request->quest;
        $user->author = $request->author;
        $user->update();
        
        $owner = User::where('deleted_at', NULL)->where('id', Auth::user()->id)->first();
        if (isset($request->reason) && isset($request->quest)) {
            $owner->survey = 1;
        }
        else
        {
            $owner->survey = 0;
        }
        $owner->update();
        $status = "You are good to go";
        return redirect()->route('home', array('status' => $status)); 
    }

}
