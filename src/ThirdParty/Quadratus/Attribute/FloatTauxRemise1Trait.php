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
 * Taux remise1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRemise1Trait {

    /**
     * Taux remise1.
     *
     * @var float
     */
    private $tauxRemise1;

    /**
     * Get the taux remise1.
     *
     * @return float Returns the taux remise1.
     */
    public function getTauxRemise1() {
        return $this->tauxRemise1;
    }

    /**
     * Set the taux remise1.
     *
     * @param float $tauxRemise1 The taux remise1.
     */
    public function setTauxRemise1($tauxRemise1) {
        $this->tauxRemise1 = $tauxRemise1;
        return $this;
    }
}
