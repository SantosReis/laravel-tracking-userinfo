<?php

namespace App\Http\Controllers;

use App\Models\TrackingInfo;
use Illuminate\Http\Request;

class TrackingInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'internal_client' => 'required|string|max:255',
            'client' =>	'required|string|max:255',
            'module' =>	'required|string|max:255',
            'language' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'width' => 'required|string|max:255',
            'height' =>	'required|string|max:255',
            'browser' => 'required|string|max:255',
            'browser_version' => 'required|string|max:255',
            'java' => 'required|boolean',
            'mobile' =>	'required|boolean',
            'os' =>	'required|string|max:255',
            'osversion' => 'required|string|max:255',
            'cookies' => 'required|boolean',
            'track' => 'required|string|max:255',
        ]);






        $trackingInfo = TrackingInfo::create($validatedData);

        return response()->json([
            'message' => 'Tracking Info created successfully',
            'data' => $trackingInfo
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
