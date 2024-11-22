<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Symbol extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function stats()
    {
        return $this->hasMany(Stats::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class , 'symbol_id');
    }
    public function depths()
    {
        return $this->hasMany(Depth::class);
    }
    public function levels()
    {
        return $this->hasMany(Level::class);
    }
    public function trades()
    {
        return $this->hasMany(Trade::class);
    }
    public function balance()
    {
        return $this->hasMany(Balance::class);
    }
    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
