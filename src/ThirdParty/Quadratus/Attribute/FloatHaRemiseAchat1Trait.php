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
 * Ha remise achat1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaRemiseAchat1Trait {

    /**
     * Ha remise achat1.
     *
     * @var float
     */
    private $haRemiseAchat1;

    /**
     * Get the ha remise achat1.
     *
     * @return float Returns the ha remise achat1.
     */
    public function getHaRemiseAchat1() {
        return $this->haRemiseAchat1;
    }

    /**
     * Set the ha remise achat1.
     *
     * @param float $haRemiseAchat1 The ha remise achat1.
     */
    public function setHaRemiseAchat1($haRemiseAchat1) {
        $this->haRemiseAchat1 = $haRemiseAchat1;
        return $this;
    }
}
