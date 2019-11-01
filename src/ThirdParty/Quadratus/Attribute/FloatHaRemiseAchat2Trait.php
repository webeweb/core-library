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
 * Ha remise achat2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaRemiseAchat2Trait {

    /**
     * Ha remise achat2.
     *
     * @var float
     */
    private $haRemiseAchat2;

    /**
     * Get the ha remise achat2.
     *
     * @return float Returns the ha remise achat2.
     */
    public function getHaRemiseAchat2() {
        return $this->haRemiseAchat2;
    }

    /**
     * Set the ha remise achat2.
     *
     * @param float $haRemiseAchat2 The ha remise achat2.
     */
    public function setHaRemiseAchat2($haRemiseAchat2) {
        $this->haRemiseAchat2 = $haRemiseAchat2;
        return $this;
    }
}
