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

use WBW\Library\Core\Exception\ChartAccounts\AccountAlreadyExistsException;

/**
 * Abstract chart of accounts model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ChartAccounts\Model
 * @abstract
 */
abstract class AbstractChartAccountsModel {

    /**
     * Accounts.
     *
     * @var ChartAccountsAccount[]
     */
    private $accounts;

    /**
     * Label.
     *
     * @var string
     */
    private $label;

    /**
     * Number
     *
     * @var string
     */
    private $number;

    /**
     * Constructor.
     */
    protected function __construct() {
        $this->setAccounts([]);
    }

    /**
     * Add an account.
     *
     * @param ChartAccountsAccount $account The account.
     * @return AbstractChartAccountsModel Returns this charts of accounts model.
     * @throws AccountAlreadyExistsException Throws an account already exists.
     */
    public function addAccount(ChartAccountsAccount $account) {
        foreach ($this->accounts as $current) {
            if ($current->getNumber() === $account->getNumber()) {
                throw new AccountAlreadyExistsException($account);
            }
        }
        $this->accounts[] = $account;
        return $this;
    }

    /**
     * Get the accounts.
     *
     * @return ChartAccountsAccount[] Returns the accounts.
     */
    public function getAccounts() {
        return $this->accounts;
    }

    /**
     * Get the label.
     *
     * @return string Returns the label.
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * Get the number.
     *
     * @return string Returns the number.
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * Remove an account.
     *
     * @param ChartAccountsAccount $account The account.
     * @return AbstractChartAccountsModel Returns this charts of accounts model.
     */
    public function removeAccount(ChartAccountsAccount $account) {
        for ($i = count($this->accounts) - 1; 0 <= $i; --$i) {
            if ($account->getNumber() !== $this->accounts[$i]->getNumber()) {
                continue;
            }
            unset($this->accounts[$i]);
        }
        return $this;
    }

    /**
     * Set the accounts.
     *
     * @param ChartAccountsAccount[] $accounts The ccounts.
     * @return AbstractChartAccountsModel Returns this charts of accounts model.
     */
    protected function setAccounts(array $accounts) {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * Set the label.
     *
     * @param string $label The label.
     * @return AbstractChartAccountsModel Returns this charts of accounts model.
     */
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    /**
     * Set the number.
     *
     * @param string $number
     * @return AbstractChartAccountsModel Returns this charts of accounts model.
     */
    public function setNumber($number) {
        $this->number = $number;
        return $this;
    }
}
