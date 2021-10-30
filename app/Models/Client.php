<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Client.
 *
 * @package namespace App\Models;
 */
class Client extends Model implements Transformable
{
    use HasFactory, TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'document',
        'date_of_birth',
        'phone',
        'whatsapp',
        'address',
        'number_builder',
        'zipcode',
        'complement',
        'city',
        'state',
        'has_children',
        'marital_status',
        'working',
        'has_interest',
        'status',

    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }



}
