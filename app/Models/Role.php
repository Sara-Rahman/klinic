<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function rolepermission()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }
        
    
}
