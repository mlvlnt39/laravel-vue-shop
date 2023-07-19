<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Color $color)
    {
        return view('color.show', compact('color'));
    }
}
