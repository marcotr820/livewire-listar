<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('listar_livewire');
    }

    public function store(){
        return request();
    }

    public function listar_datatable(){
        $users = User::select('name', 'email', 'password', 'remember_token')->get()->take(2000);
        return view('listar_datatable', compact('users'));
    }

    public function ajax_datatable(){
        return view('ajax_datatable');
    }

    public function ajax(){
        $query = User::get();
        return datatables($query)->make(true);
    }
}
