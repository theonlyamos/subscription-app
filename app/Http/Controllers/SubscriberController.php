<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use App\Models\Subscriber;
use App\Models\Subscriptions;
use App\Models\User;
use App\Models\Website;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['status' => 'success', "subscribers" => Subscriber::all()
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubscriberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriberRequest $request)
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->get();
        if (count($user)){
            $data['user_id'] = $user[0]->id;
        }

        $website_id = $data['website_id'];
        unset($data['website_id']);

        $subscriber = Subscriber::create($data);
        $subscriber->user = $subscriber->user;

        Subscriptions::create([
            'subscriber_id' => $subscriber->id,
            'website_id' => $website_id
        ]);

        return response()->json(['status' => 'success', "subscriber" => $subscriber,
          'message' => 'Subscriber created successfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        return response()->json(['status' => 'success', "subscriber" => $subscriber,
          'message' => 'Subscriber created successfully'
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscriberRequest  $request
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscriberRequest $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
