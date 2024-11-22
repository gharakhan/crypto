<?php

namespace App\Models\ACL;

use App\Models\ACL\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name' , 'label','parent','level'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
