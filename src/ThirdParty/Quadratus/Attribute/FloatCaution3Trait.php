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
 * Caution3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCaution3Trait {

    /**
     * Caution3.
     *
     * @var float
     */
    private $caution3;

    /**
     * Get the caution3.
     *
     * @return float Returns the caution3.
     */
    public function getCaution3() {
        return $this->caution3;
    }

    /**
     * Set the caution3.
     *
     * @param float $caution3 The caution3.
     */
    public function setCaution3($caution3) {
        $this->caution3 = $caution3;
        return $this;
    }
}
