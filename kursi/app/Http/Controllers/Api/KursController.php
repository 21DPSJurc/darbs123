<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kursi;
class KursController extends Controller
{
    public function index()
    {
        return response()->json(kursi::all());
    }
}
