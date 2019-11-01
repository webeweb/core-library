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
 * Montant credit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCreditTrait {

    /**
     * Montant credit.
     *
     * @var float
     */
    private $montantCredit;

    /**
     * Get the montant credit.
     *
     * @return float Returns the montant credit.
     */
    public function getMontantCredit() {
        return $this->montantCredit;
    }

    /**
     * Set the montant credit.
     *
     * @param float $montantCredit The montant credit.
     */
    public function setMontantCredit($montantCredit) {
        $this->montantCredit = $montantCredit;
        return $this;
    }
}
