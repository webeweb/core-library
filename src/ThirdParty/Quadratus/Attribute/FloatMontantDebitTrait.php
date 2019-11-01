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
 * Montant debit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantDebitTrait {

    /**
     * Montant debit.
     *
     * @var float
     */
    private $montantDebit;

    /**
     * Get the montant debit.
     *
     * @return float Returns the montant debit.
     */
    public function getMontantDebit() {
        return $this->montantDebit;
    }

    /**
     * Set the montant debit.
     *
     * @param float $montantDebit The montant debit.
     */
    public function setMontantDebit($montantDebit) {
        $this->montantDebit = $montantDebit;
        return $this;
    }
}
