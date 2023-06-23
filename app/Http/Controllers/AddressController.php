<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $adress = DB::table('address')
            ->select('city', 'street')
            ->get();
            return view('mainpages/location',  compact('adress'));
    }
}
