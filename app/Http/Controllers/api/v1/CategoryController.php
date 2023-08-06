<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends ApiController
{
    public function index()
    {
        $categories = Category::all();
        return $this->sendResponse(CategoryResource::collection($categories), "categories found");
    }
}
