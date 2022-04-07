<?php

namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $items =DB::select('select * from users1');
        return view('index', ['items' => $items]);
    }
}

