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
 * Debit2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDebit2Trait {

    /**
     * Debit2.
     *
     * @var float
     */
    private $debit2;

    /**
     * Get the debit2.
     *
     * @return float Returns the debit2.
     */
    public function getDebit2() {
        return $this->debit2;
    }

    /**
     * Set the debit2.
     *
     * @param float $debit2 The debit2.
     */
    public function setDebit2($debit2) {
        $this->debit2 = $debit2;
        return $this;
    }
}
