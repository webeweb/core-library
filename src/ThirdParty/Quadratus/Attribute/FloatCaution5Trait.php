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
 * Caution5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCaution5Trait {

    /**
     * Caution5.
     *
     * @var float
     */
    private $caution5;

    /**
     * Get the caution5.
     *
     * @return float Returns the caution5.
     */
    public function getCaution5() {
        return $this->caution5;
    }

    /**
     * Set the caution5.
     *
     * @param float $caution5 The caution5.
     */
    public function setCaution5($caution5) {
        $this->caution5 = $caution5;
        return $this;
    }
}
