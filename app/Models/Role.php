<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;

class Role extends \Spatie\Permission\Models\Role
{
    use HasFactory;

    public function permission(): HasMany
    {
        return $this->hasMany(Permission::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
