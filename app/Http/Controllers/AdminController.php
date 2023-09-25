<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        if(Auth::user()->role == 'user'){
            return redirect()->route('dashboard');
        }
        $subscriptions = Subscription::latest()->paginate(10);
        // dd($subscription);
        $plans = Plan::all();
        return view('dashboard1', compact('plans', 'subscriptions'));
    }
    public function destroy(Subscription $subscription){
        if(Auth::user()->role == 'user'){
            return redirect()->route('dashboard');
        }
        $subscription->delete();
        return response()->json('This Subscribe has been deleted.',200);
    }
    public function addDays(Request $request, Subscription $subscription){
        $days = $request->input('days');
        if(Auth::user()->role == 'user'){
            return redirect()->route('dashboard');
        }
        if($subscription->expires_at >= now()){
            $subscription->update([
                'expires_at'=>$subscription->expires_at->addDays($request->input('days')),
            ]);
        }else{
            $subscription->update([
                'expires_at' => now()->addDays($days),
            ]);
        }
        return response()->json('The days of this subscription have been successfully updated!',200);
    }
}
