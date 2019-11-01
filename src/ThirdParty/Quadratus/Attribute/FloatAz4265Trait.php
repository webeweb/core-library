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
 * Az4265 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4265Trait {

    /**
     * Az4265.
     *
     * @var float
     */
    private $az4265;

    /**
     * Get the az4265.
     *
     * @return float Returns the az4265.
     */
    public function getAz4265() {
        return $this->az4265;
    }

    /**
     * Set the az4265.
     *
     * @param float $az4265 The az4265.
     */
    public function setAz4265($az4265) {
        $this->az4265 = $az4265;
        return $this;
    }
}
