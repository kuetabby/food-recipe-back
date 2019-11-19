<?php

namespace App\Http\Controllers;

use App\Foods;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(
            [
                'status_code' => 200,
                'data' => Foods::all()
            ],
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        try {
            $foods_create = new Foods();
            $foods_create->title = $request->title;
            $foods_create->ingredients = $request->ingredients;
            $foods_create->img = $request->img;
            $foods_create->save();
            return response()->json(
                [
                    'status_code' => 200,
                    'data' => Foods::all()
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status_code' => 422,
                    'message' => 'Lengkapi Field'
                ],
                422
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function show(Foods $foods)
    {
        $foods_show = DB::table('foods')->get();

        return response()->json($foods_show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function edit(Foods $foods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foods $foods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foods $id)
    {
        $foods_destroy = Foods::find($id);
        $foods_destroy->delete();

        return "Deleted!";
    }
}
