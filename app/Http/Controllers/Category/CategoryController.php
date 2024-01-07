<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        return new CategoryCollection(Category::all());
    }
}
