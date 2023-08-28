<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scramble;

class ScrambleController extends Controller
{

    /**
     * @param string $item The todo item being updated.
     */
     public function index()
    {
        $scrambles = Scramble::all();
        return view('scramble.index', compact('scrambles'));
    }
}
