<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $result = Feedback::create($this->validateFeedback($request));
        if ($result) {
            return redirect()->route('welcome');
        }
    
    }
    public function validateFeedback(Request $request){
        return $this->validate($request,
            [
            'email'=>'required',
            'message'=>'required',
        ]);
    }
}
