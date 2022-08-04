<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\StoreWebsiteRequest;
use App\Http\Requests\UpdateWebsiteRequest;
use App\Models\Subscriber;
use App\Models\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['status' => 'success', "websites" => Website::all()
        ], 200);

    }

    /**
     * Display a listing of the posts belonging to website.
     *
     * @return \Illuminate\Http\Response
     */

    public function posts(Website $website)
    {
        return response()->json(['status' => 'success', "posts" => $website->posts()
        ], 200);
    }

    /**
     * Display a listing of the subscribers belonging to website.
     *
     * @return \Illuminate\Http\Response
     */

    public function subscribers(Website $website)
    {
        return response()->json(['status' => 'success', "posts" => $website->posts()
        ], 200);
    }

    /**
     * Create a website subscriber.
     *
     * @return \Illuminate\Http\Response
     */

    public function subscribe(Website $website, StoreSubscriberRequest $request)
    {
        $subscriber = Subscriber::create($request->validated());

        return response()->json(['status' => 'success', "message" => 'Subscriber created successfully'
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWebsiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebsiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWebsiteRequest  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebsiteRequest $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
