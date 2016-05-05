<?php

namespace paycontrol\Http\Controllers;

use Illuminate\Http\Request;

use paycontrol\Http\Requests;

class ContaController extends Controller
{
    public function lista(){
    	return '<h1>Lista de contas</h1>';
    }
}
