<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintext;

class MaintextController extends Controller
{
    public function getIndex($url = null)
    {
        $maintext = Maintext::where('url', $url)
            ->where('published', true)
            ->firstOrFail();
        return view('maintext', compact('maintext'));
    }
}
