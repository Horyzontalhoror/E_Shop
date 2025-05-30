<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{
    //


    public function index()
    {
        $provinces = DB::table('t_provinsi')->orderBy('nama')->get();

        return view('user.checkout.checkout', compact('provinces'));
    }
}
