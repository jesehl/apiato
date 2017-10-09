<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class ListAndSearchUsersAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class ListAndSearchUsersAction extends Action
{

    /**
     * @return  mixed
     */
    public function run()
    {
        return Apiato::call('User@ListUsersTask', [], ['ordered']);
    }
}
