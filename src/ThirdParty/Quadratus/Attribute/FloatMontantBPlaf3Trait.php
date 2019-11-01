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
 * Montant b plaf3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBPlaf3Trait {

    /**
     * Montant b plaf3.
     *
     * @var float
     */
    private $montantBPlaf3;

    /**
     * Get the montant b plaf3.
     *
     * @return float Returns the montant b plaf3.
     */
    public function getMontantBPlaf3() {
        return $this->montantBPlaf3;
    }

    /**
     * Set the montant b plaf3.
     *
     * @param float $montantBPlaf3 The montant b plaf3.
     */
    public function setMontantBPlaf3($montantBPlaf3) {
        $this->montantBPlaf3 = $montantBPlaf3;
        return $this;
    }
}
