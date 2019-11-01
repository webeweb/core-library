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
 * Debit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDebitTrait {

    /**
     * Debit.
     *
     * @var float
     */
    private $debit;

    /**
     * Get the debit.
     *
     * @return float Returns the debit.
     */
    public function getDebit() {
        return $this->debit;
    }

    /**
     * Set the debit.
     *
     * @param float $debit The debit.
     */
    public function setDebit($debit) {
        $this->debit = $debit;
        return $this;
    }
}
