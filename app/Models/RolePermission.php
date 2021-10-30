<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class RolePermission.
 *
 * @package namespace App\Models;
 */
class RolePermission extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role_id', 'permission_id'];

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
