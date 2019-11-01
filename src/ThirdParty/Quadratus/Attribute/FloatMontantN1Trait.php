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
 * Montant n1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantN1Trait {

    /**
     * Montant n1.
     *
     * @var float
     */
    private $montantN1;

    /**
     * Get the montant n1.
     *
     * @return float Returns the montant n1.
     */
    public function getMontantN1() {
        return $this->montantN1;
    }

    /**
     * Set the montant n1.
     *
     * @param float $montantN1 The montant n1.
     */
    public function setMontantN1($montantN1) {
        $this->montantN1 = $montantN1;
        return $this;
    }
}
