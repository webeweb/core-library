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
 * Ha remise sup achat1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaRemiseSupAchat1Trait {

    /**
     * Ha remise sup achat1.
     *
     * @var float
     */
    private $haRemiseSupAchat1;

    /**
     * Get the ha remise sup achat1.
     *
     * @return float Returns the ha remise sup achat1.
     */
    public function getHaRemiseSupAchat1() {
        return $this->haRemiseSupAchat1;
    }

    /**
     * Set the ha remise sup achat1.
     *
     * @param float $haRemiseSupAchat1 The ha remise sup achat1.
     */
    public function setHaRemiseSupAchat1($haRemiseSupAchat1) {
        $this->haRemiseSupAchat1 = $haRemiseSupAchat1;
        return $this;
    }
}
