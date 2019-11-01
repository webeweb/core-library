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
 * Montant b plaf2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBPlaf2Trait {

    /**
     * Montant b plaf2.
     *
     * @var float
     */
    private $montantBPlaf2;

    /**
     * Get the montant b plaf2.
     *
     * @return float Returns the montant b plaf2.
     */
    public function getMontantBPlaf2() {
        return $this->montantBPlaf2;
    }

    /**
     * Set the montant b plaf2.
     *
     * @param float $montantBPlaf2 The montant b plaf2.
     */
    public function setMontantBPlaf2($montantBPlaf2) {
        $this->montantBPlaf2 = $montantBPlaf2;
        return $this;
    }
}
