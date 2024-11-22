<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function symbol()
    {
        return $this->belongsTo(Symbol::class);
    }
}
