<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Debit classe15 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDebitClasse15Trait {

    /**
     * Debit classe15.
     *
     * @var float
     */
    private $debitClasse15;

    /**
     * Get the debit classe15.
     *
     * @return float Returns the debit classe15.
     */
    public function getDebitClasse15() {
        return $this->debitClasse15;
    }

    /**
     * Set the debit classe15.
     *
     * @param float $debitClasse15 The debit classe15.
     */
    public function setDebitClasse15($debitClasse15) {
        $this->debitClasse15 = $debitClasse15;
        return $this;
    }
}
