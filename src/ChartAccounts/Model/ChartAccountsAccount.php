<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ChartAccounts\Model;

/**
 * Chart of accounts account model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ChartAccounts\Model
 */
class ChartAccountsAccount extends AbstractChartAccountsModel {

    /**
     * Account type.
     *
     * @var ChartAccountsType
     */
    private $accountType;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get the account type.
     *
     * @return ChartAccountsType Returns the type.
     */
    public function getAccountType() {
        return $this->accountType;
    }

    /**
     * Set the account type.
     *
     * @param ChartAccountsType $accountType The account type.
     * @return ChartAccountsAccount Returns this COA account.
     */
    public function setAccountType(ChartAccountsType $accountType) {
        $this->accountType = $accountType;
        return $this;
    }
}
