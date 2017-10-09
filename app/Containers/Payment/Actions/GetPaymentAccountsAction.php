<?php

namespace App\Containers\Payment\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetPaymentAccountsAction
 *
 * @author  Johannes Schobel <johannes.schobel@googlemail.com>
 */
class GetPaymentAccountsAction extends Action
{

    /**
     * @param \App\Ship\Parents\Requests\Request $request
     *
     * @return  mixed
     */
    public function run(Request $request)
    {
        $user = Apiato::call('Authentication@GetAuthenticatedUserTask');

        $paymentAccounts = Apiato::call('Payment@GetPaymentAccountsTask', [], ['ordered', ['filterByUser' => [$user]]]);

        return $paymentAccounts;
    }
}
