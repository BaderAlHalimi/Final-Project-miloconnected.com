<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionsController extends Controller
{
    //
    public function index()
    {
        $subscription = Subscription::where('status', 'completed')->where('user_id', Auth::guard('sanctum')->user()->id)->latest()->first();
        $subscriptions = Subscription::where('user_id', Auth::guard('sanctum')->user()->id);
        if ($subscription) {
            $subscriptions = $subscriptions->where('id', '!=', $subscription->id);
        }
        $subscriptions = $subscriptions->paginate(10);
        return response()->json([
            'subscription' => $subscription,
            'subscriptions' => $subscriptions,
        ], 200);
    }
}
