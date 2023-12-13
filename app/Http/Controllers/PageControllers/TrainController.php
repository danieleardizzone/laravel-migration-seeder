<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::all()->where('stazione_di_partenza', 'palermo');

        return view('index', compact('trains'));
    }
}
