<?php

namespace App\Transformers;

use App\Entities\RolePermission;
use League\Fractal\TransformerAbstract;

/**
 * Class RolePermissionTransformer.
 *
 * @package namespace App\Transformers;
 */
class RolePermissionTransformer extends TransformerAbstract
{
    /**
     * Transform the RolePermission entity.
     *
     * @param \App\Entities\RolePermission $model
     *
     * @return array
     */
    public function transform(RolePermission $model)
    {
        return [
            'id' => (int)$model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
