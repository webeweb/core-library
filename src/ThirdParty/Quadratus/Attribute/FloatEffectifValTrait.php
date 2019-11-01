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
 * Effectif val trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEffectifValTrait {

    /**
     * Effectif val.
     *
     * @var float
     */
    private $effectifVal;

    /**
     * Get the effectif val.
     *
     * @return float Returns the effectif val.
     */
    public function getEffectifVal() {
        return $this->effectifVal;
    }

    /**
     * Set the effectif val.
     *
     * @param float $effectifVal The effectif val.
     */
    public function setEffectifVal($effectifVal) {
        $this->effectifVal = $effectifVal;
        return $this;
    }
}
