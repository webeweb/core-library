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
 * Debit1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDebit1Trait {

    /**
     * Debit1.
     *
     * @var float
     */
    private $debit1;

    /**
     * Get the debit1.
     *
     * @return float Returns the debit1.
     */
    public function getDebit1() {
        return $this->debit1;
    }

    /**
     * Set the debit1.
     *
     * @param float $debit1 The debit1.
     */
    public function setDebit1($debit1) {
        $this->debit1 = $debit1;
        return $this;
    }
}
