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
 * Taux h normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHNormalTrait {

    /**
     * Taux h normal.
     *
     * @var float
     */
    private $tauxHNormal;

    /**
     * Get the taux h normal.
     *
     * @return float Returns the taux h normal.
     */
    public function getTauxHNormal() {
        return $this->tauxHNormal;
    }

    /**
     * Set the taux h normal.
     *
     * @param float $tauxHNormal The taux h normal.
     */
    public function setTauxHNormal($tauxHNormal) {
        $this->tauxHNormal = $tauxHNormal;
        return $this;
    }
}
