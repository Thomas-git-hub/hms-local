<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThesisReleasedTransactionsController extends Controller
{
    public function index()
    {
        return view('administration.thesis_released_transactions');
    }
}
