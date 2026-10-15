<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = User::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail data berhasil diambil',
            'data'    => $items
        ], 200);
    }
}
