<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriptionsRequest;
use App\Http\Requests\UpdateSubscriptionsRequest;
use App\Models\Subscriptions;

class SubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscriptions::all();
        foreach ($subscriptions as $sub){
            $sub->user = $sub->subscriber->user;
            $sub->website = $sub->website;
        }

        return response()->json(['status' => 'success', "subscriptions" => $subscriptions
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubscriptionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriptionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscriptions  $subscriptions
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriptions $subscriptions)
    {
        return response()->json(['status' => 'success', "subscription" => $subscriptions,
          'message' => 'Subscriber created successfully'
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscriptionsRequest  $request
     * @param  \App\Models\Subscriptions  $subscriptions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscriptionsRequest $request, Subscriptions $subscriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriptions  $subscriptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriptions $subscriptions)
    {
        //
    }
}
