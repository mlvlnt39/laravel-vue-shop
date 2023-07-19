<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Color $color)
    {
        return view('color.edit', compact('color'));
    }
}
