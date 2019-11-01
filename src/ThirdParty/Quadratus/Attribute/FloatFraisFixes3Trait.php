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
 * Frais fixes3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFraisFixes3Trait {

    /**
     * Frais fixes3.
     *
     * @var float
     */
    private $fraisFixes3;

    /**
     * Get the frais fixes3.
     *
     * @return float Returns the frais fixes3.
     */
    public function getFraisFixes3() {
        return $this->fraisFixes3;
    }

    /**
     * Set the frais fixes3.
     *
     * @param float $fraisFixes3 The frais fixes3.
     */
    public function setFraisFixes3($fraisFixes3) {
        $this->fraisFixes3 = $fraisFixes3;
        return $this;
    }
}
