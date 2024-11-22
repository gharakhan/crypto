<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function symbol()
    {
        return $this->belongsTo(Symbol::class);
    }

    public function getTypeValues()
    {
        return [
            '1' => 'Support',
            '2' => 'Resistance'
        ][$this->type];
    }
}
