<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Setting extends Model implements Auditable
{
    use HasFactory, AuditableTrait;
    
    protected $fillable = [
        'display_name',
        'key',
        'value'
    ];

    public function settings()
    {
        return $this::all();
    }
}
