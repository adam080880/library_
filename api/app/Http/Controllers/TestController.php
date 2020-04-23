<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class TestController extends Controller
{
    public function get(UserRequest $req)
    {
        return response()->json($req->validated());
    }
}
