<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Relationship with the User model
    public function users(){
        return $this->hasMany(User::class, 'role_id');
    }
}
