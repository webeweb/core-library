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
 * Montant b plaf4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBPlaf4Trait {

    /**
     * Montant b plaf4.
     *
     * @var float
     */
    private $montantBPlaf4;

    /**
     * Get the montant b plaf4.
     *
     * @return float Returns the montant b plaf4.
     */
    public function getMontantBPlaf4() {
        return $this->montantBPlaf4;
    }

    /**
     * Set the montant b plaf4.
     *
     * @param float $montantBPlaf4 The montant b plaf4.
     */
    public function setMontantBPlaf4($montantBPlaf4) {
        $this->montantBPlaf4 = $montantBPlaf4;
        return $this;
    }
}
