<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\ChartAccounts;

use WBW\Library\Core\ChartAccounts\Model\ChartAccountsAccount;

/**
 * Account already exists exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\ChartAccounts
 */
class AccountAlreadyExistsException extends AbstractChartAccountsException {

    /**
     * Constructor.
     *
     * @param ChartAccountsAccount $account The account.
     */
    public function __construct(ChartAccountsAccount $account) {
        parent::__construct(sprintf("This account [%s:%s] already exists", $account->getNumber(), $account->getLabel()));
    }

}
