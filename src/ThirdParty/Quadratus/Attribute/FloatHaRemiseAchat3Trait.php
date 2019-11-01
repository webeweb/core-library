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
 * Ha remise achat3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaRemiseAchat3Trait {

    /**
     * Ha remise achat3.
     *
     * @var float
     */
    private $haRemiseAchat3;

    /**
     * Get the ha remise achat3.
     *
     * @return float Returns the ha remise achat3.
     */
    public function getHaRemiseAchat3() {
        return $this->haRemiseAchat3;
    }

    /**
     * Set the ha remise achat3.
     *
     * @param float $haRemiseAchat3 The ha remise achat3.
     */
    public function setHaRemiseAchat3($haRemiseAchat3) {
        $this->haRemiseAchat3 = $haRemiseAchat3;
        return $this;
    }
}
