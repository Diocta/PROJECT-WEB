<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // kolom pada tabel roles
    ];

    // Relasi many-to-many ke User
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Relasi many-to-many ke Permission (kalau kamu punya tabel permissions dan role_permission)
    public function permissions()
{
    return $this->belongsToMany(Permission::class, 'permission_role');
}

}
