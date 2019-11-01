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
 * Montant saisi credit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSaisiCreditTrait {

    /**
     * Montant saisi credit.
     *
     * @var float
     */
    private $montantSaisiCredit;

    /**
     * Get the montant saisi credit.
     *
     * @return float Returns the montant saisi credit.
     */
    public function getMontantSaisiCredit() {
        return $this->montantSaisiCredit;
    }

    /**
     * Set the montant saisi credit.
     *
     * @param float $montantSaisiCredit The montant saisi credit.
     */
    public function setMontantSaisiCredit($montantSaisiCredit) {
        $this->montantSaisiCredit = $montantSaisiCredit;
        return $this;
    }
}
