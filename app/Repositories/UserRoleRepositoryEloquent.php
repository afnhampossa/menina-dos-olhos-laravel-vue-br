<?php

namespace App\Repositories;

use App\Models\UserRole;
use App\Validators\UserRoleValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class UserRoleRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRoleRepositoryEloquent extends BaseRepository implements UserRoleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserRole::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return UserRoleValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
