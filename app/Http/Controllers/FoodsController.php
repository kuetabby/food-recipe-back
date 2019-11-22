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
    public function create(Request $request)
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
    public function update(Request $request, $id)
    {
        try {
            $ingredients = $request->ingredients;
            $img = $request->img;

            $foods_update = Foods::find($id);
            $foods_update->ingredients = $ingredients;
            $foods_update->img = $img;
            $foods_update->save();

            return response()->json(
                [
                    'status_code' => 200,
                    'data' => Foods::find($id)
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

    public function select($id)
    {
        try {
            //code...

            return response()->json(
                [
                    'status_code' => 200,
                    'data' => Foods::find($id)
                ],
                200
            );
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(
                [
                    'status_code' => 404,
                    'message' => 'Error'
                ],
                404
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //code...
            $foods_destroy = Foods::find($id);
            $foods_destroy->delete();

            return response()->json(
                [
                    'status_code' => 200,
                    'data' => Foods::all()
                ],
                200
            );
        } catch (\Throwable $th) {
            //throw $th;
            response()->json(
                [
                    'status_code' => 404,
                    'message' => 'Error'
                ],
                404
            );
        }
    }
}
