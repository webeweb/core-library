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
 * Ha remise sup achat2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaRemiseSupAchat2Trait {

    /**
     * Ha remise sup achat2.
     *
     * @var float
     */
    private $haRemiseSupAchat2;

    /**
     * Get the ha remise sup achat2.
     *
     * @return float Returns the ha remise sup achat2.
     */
    public function getHaRemiseSupAchat2() {
        return $this->haRemiseSupAchat2;
    }

    /**
     * Set the ha remise sup achat2.
     *
     * @param float $haRemiseSupAchat2 The ha remise sup achat2.
     */
    public function setHaRemiseSupAchat2($haRemiseSupAchat2) {
        $this->haRemiseSupAchat2 = $haRemiseSupAchat2;
        return $this;
    }
}
