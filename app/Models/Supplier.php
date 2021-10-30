<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Supplier.
 *
 * @package namespace App\Models;
 */
class Supplier extends Model implements Transformable
{
    use HasFactory,TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'document',
        'date_of_birth',
        'phone',
        'whatsapp',
        'address',
        'number_builder',
        'zipcode',
        'city',
        'state',
        'schooling',
        'specialty',
        'professional_document',
        'facebook',
        'instagram',
        'youtube',
        'linkedin',
        // 'photo',
        // 'curriculum',
        'why',
        'bank_account',
        'bank_agency',
        'bank',

        'status',
    ];
    public $statusLabel = [
        0=>"ATIVO",
        1=>"INATIVO",
        2=>"PENDENTE",
    ];

    public function getStatusLabel(){
        return $this->statusLabel($this->status);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
