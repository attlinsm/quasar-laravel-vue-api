<?php

namespace App\Http\Controllers\Api\Route;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRouteRequest;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRouteRequest $request)
    {
        $validated = $request->validated();
        $route = new Route();
        $route->fill($validated)->save();

        return response()->json([
            'message' => 'The route was added successfully',
            'route' => $route,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Route $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Route $route)
    {
        //
    }
}
