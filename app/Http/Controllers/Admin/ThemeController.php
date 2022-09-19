<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function store(Request $request, Theme $theme)
    {
        $theme->selectedTheme($request);

        return $this->success('settings','Theme changed successfully');
    }
}
