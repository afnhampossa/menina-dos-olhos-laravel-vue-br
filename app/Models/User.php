<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasPermission($permission)
    {
        $permissions = $this->permissions()->where('id', $permission->id);
        return $permissions->isEmpty() ? false : true;
    }

    public function permissions()
    {
        $roles = $this->roles()->get();
        $role_permission = RolePermission::whereIn('role_id', $roles)->with('permissions')->pluck('permission_id');
        return Permission::whereIn('id', $role_permission)->get();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function isSuperAdmin()
    {
        return $this->roles->first()->slug == "admin" ? true : false;
    }

    public function isClient()
    {
        return $this->roles->first()->slug == "client" ? true : false;
    }
    public function isSupplier()
    {
        return $this->roles->first()->slug == "supplier" ? true : false;
    }
}
