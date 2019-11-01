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
 * Taux remise2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRemise2Trait {

    /**
     * Taux remise2.
     *
     * @var float
     */
    private $tauxRemise2;

    /**
     * Get the taux remise2.
     *
     * @return float Returns the taux remise2.
     */
    public function getTauxRemise2() {
        return $this->tauxRemise2;
    }

    /**
     * Set the taux remise2.
     *
     * @param float $tauxRemise2 The taux remise2.
     */
    public function setTauxRemise2($tauxRemise2) {
        $this->tauxRemise2 = $tauxRemise2;
        return $this;
    }
}
