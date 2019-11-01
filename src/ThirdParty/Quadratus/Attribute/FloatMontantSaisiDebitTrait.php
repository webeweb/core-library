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
 * Montant saisi debit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSaisiDebitTrait {

    /**
     * Montant saisi debit.
     *
     * @var float
     */
    private $montantSaisiDebit;

    /**
     * Get the montant saisi debit.
     *
     * @return float Returns the montant saisi debit.
     */
    public function getMontantSaisiDebit() {
        return $this->montantSaisiDebit;
    }

    /**
     * Set the montant saisi debit.
     *
     * @param float $montantSaisiDebit The montant saisi debit.
     */
    public function setMontantSaisiDebit($montantSaisiDebit) {
        $this->montantSaisiDebit = $montantSaisiDebit;
        return $this;
    }
}
