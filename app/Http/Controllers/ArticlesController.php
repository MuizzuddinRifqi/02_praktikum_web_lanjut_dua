<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function article($id){
        return 'Article dengan id ' . $id;
    }
}
