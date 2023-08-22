<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelegramController extends Controller
{
    //
    public function inbound(Request $request)
    {
        \Log::info($request->all());
    }
}
