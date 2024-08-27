<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\TrackingInfo;
use Illuminate\Http\Request;

class TrackingInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        //The user must be able to filter the table by internal_client, client, module, language, date and mobile

        // Handles ?sort=client (asc) and ?sort=-client (desc)
        // Get the sort query parameter (or fall back to default sort "client")
        $sortColumn = $request->input('sort', 'client');

        // Set the sort direction based on whether the key starts with -
        // using Laravel's Str::startsWith() helper function
        $sortDirection = Str::startsWith($sortColumn, '-') ? 'desc' : 'asc';
        $sortColumn = ltrim($sortColumn, '-');

        return TrackingInfo::orderBy($sortColumn, $sortDirection)->paginate(20);
  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $all_fields =  explode(';', hex2bin($request->track));
        $request->merge(['internal_client' => $all_fields[0]]);
        $request->merge(['client' => $all_fields[1]]);
        $request->merge(['module' => $all_fields[2]]);
        $request->merge(['language' => $all_fields[3]]);
        $request->merge(['url' => $all_fields[4]]);
        $request->merge(['width' => $all_fields[5]]);
        $request->merge(['height' => $all_fields[6]]);
        $request->merge(['browser' => $all_fields[7]]);
        $request->merge(['browser_version' => $all_fields[8]]);
        $request->merge(['java' => boolval($all_fields[9])]);
        $request->merge(['mobile' => boolval($all_fields[10])]);
        $request->merge(['os' => $all_fields[11]]);
        $request->merge(['osversion' => $all_fields[12]]);
        $request->merge(['cookies' => boolval($all_fields[13])]);

        $validatedData = $request->validate([
            'internal_client' => 'required|string|max:255',
            'client' =>	'required|string|max:255',
            'module' =>	'required|string|max:255',
            'language' => 'required|string|max:255',
            'url' => 'required|string|max:255',
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
