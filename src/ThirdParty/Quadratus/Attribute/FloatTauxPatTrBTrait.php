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
 * Taux pat tr b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPatTrBTrait {

    /**
     * Taux pat tr b.
     *
     * @var float
     */
    private $tauxPatTrB;

    /**
     * Get the taux pat tr b.
     *
     * @return float Returns the taux pat tr b.
     */
    public function getTauxPatTrB() {
        return $this->tauxPatTrB;
    }

    /**
     * Set the taux pat tr b.
     *
     * @param float $tauxPatTrB The taux pat tr b.
     */
    public function setTauxPatTrB($tauxPatTrB) {
        $this->tauxPatTrB = $tauxPatTrB;
        return $this;
    }
}
