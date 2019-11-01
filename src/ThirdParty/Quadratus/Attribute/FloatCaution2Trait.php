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
 * Caution2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCaution2Trait {

    /**
     * Caution2.
     *
     * @var float
     */
    private $caution2;

    /**
     * Get the caution2.
     *
     * @return float Returns the caution2.
     */
    public function getCaution2() {
        return $this->caution2;
    }

    /**
     * Set the caution2.
     *
     * @param float $caution2 The caution2.
     */
    public function setCaution2($caution2) {
        $this->caution2 = $caution2;
        return $this;
    }
}
