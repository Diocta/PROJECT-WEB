<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'is_admin',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relasi many-to-many ke roles
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // contoh helper method: cek apakah user punya role tertentu
    public function hasRole($role)
    {
        return $this->roles()->where('title', $role)->exists();
    }
}
