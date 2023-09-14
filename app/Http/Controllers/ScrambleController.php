<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scrambles;
use Dedoc\Scramble\Scramble;
use OpenApi\Annotations as OA;

class ScrambleController extends Controller
{


  /**
     * Display a listing of Scrambles.
     *
     * @OA\Get(
     *     path="/scrambles",
     *     operationId="getScrambles",
     *     tags={"Scramble"},
     *     summary="Get a list of Scrambles",
     *     description="Retrieve a list of Scrambles.",
     *     @OA\Response(response="200", description="Successful response")
     * )
     *
     * @return \Illuminate\Http\Response
     */

    /**
     *  @response AnonymousResourceCollection<Scrambles>
     */

     public function index()
    {
        $scrambles = Scrambles::all();
        return view('scramble.index', compact('scrambles'));
    }


    public function edit($id)
    {
        $scramble = Scrambles::find($id);
        return view('scramble.edit', compact('scramble'));
    }


}
