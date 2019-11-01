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
 * Debit hors ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDebitHorsExTrait {

    /**
     * Debit hors ex.
     *
     * @var float
     */
    private $debitHorsEx;

    /**
     * Get the debit hors ex.
     *
     * @return float Returns the debit hors ex.
     */
    public function getDebitHorsEx() {
        return $this->debitHorsEx;
    }

    /**
     * Set the debit hors ex.
     *
     * @param float $debitHorsEx The debit hors ex.
     */
    public function setDebitHorsEx($debitHorsEx) {
        $this->debitHorsEx = $debitHorsEx;
        return $this;
    }
}
