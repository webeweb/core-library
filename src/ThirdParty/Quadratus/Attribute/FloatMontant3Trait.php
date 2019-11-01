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
 * Montant3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontant3Trait {

    /**
     * Montant3.
     *
     * @var float
     */
    private $montant3;

    /**
     * Get the montant3.
     *
     * @return float Returns the montant3.
     */
    public function getMontant3() {
        return $this->montant3;
    }

    /**
     * Set the montant3.
     *
     * @param float $montant3 The montant3.
     */
    public function setMontant3($montant3) {
        $this->montant3 = $montant3;
        return $this;
    }
}
