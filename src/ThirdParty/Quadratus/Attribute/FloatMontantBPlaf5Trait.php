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
 * Montant b plaf5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBPlaf5Trait {

    /**
     * Montant b plaf5.
     *
     * @var float
     */
    private $montantBPlaf5;

    /**
     * Get the montant b plaf5.
     *
     * @return float Returns the montant b plaf5.
     */
    public function getMontantBPlaf5() {
        return $this->montantBPlaf5;
    }

    /**
     * Set the montant b plaf5.
     *
     * @param float $montantBPlaf5 The montant b plaf5.
     */
    public function setMontantBPlaf5($montantBPlaf5) {
        $this->montantBPlaf5 = $montantBPlaf5;
        return $this;
    }
}
