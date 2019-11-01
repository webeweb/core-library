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
 * Caution4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCaution4Trait {

    /**
     * Caution4.
     *
     * @var float
     */
    private $caution4;

    /**
     * Get the caution4.
     *
     * @return float Returns the caution4.
     */
    public function getCaution4() {
        return $this->caution4;
    }

    /**
     * Set the caution4.
     *
     * @param float $caution4 The caution4.
     */
    public function setCaution4($caution4) {
        $this->caution4 = $caution4;
        return $this;
    }
}
