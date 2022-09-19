<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme'
    ];

    public function selectedTheme($request)
    {
        $theme = Theme::first();
        $theme->theme = $request->theme;
        $theme->save();

        return $this;
    }
}
