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
 * Ha remise sup achat3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaRemiseSupAchat3Trait {

    /**
     * Ha remise sup achat3.
     *
     * @var float
     */
    private $haRemiseSupAchat3;

    /**
     * Get the ha remise sup achat3.
     *
     * @return float Returns the ha remise sup achat3.
     */
    public function getHaRemiseSupAchat3() {
        return $this->haRemiseSupAchat3;
    }

    /**
     * Set the ha remise sup achat3.
     *
     * @param float $haRemiseSupAchat3 The ha remise sup achat3.
     */
    public function setHaRemiseSupAchat3($haRemiseSupAchat3) {
        $this->haRemiseSupAchat3 = $haRemiseSupAchat3;
        return $this;
    }
}
