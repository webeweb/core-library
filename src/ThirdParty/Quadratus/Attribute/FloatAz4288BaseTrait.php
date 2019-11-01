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
 * Az4288 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4288BaseTrait {

    /**
     * Az4288 base.
     *
     * @var float
     */
    private $az4288Base;

    /**
     * Get the az4288 base.
     *
     * @return float Returns the az4288 base.
     */
    public function getAz4288Base() {
        return $this->az4288Base;
    }

    /**
     * Set the az4288 base.
     *
     * @param float $az4288Base The az4288 base.
     */
    public function setAz4288Base($az4288Base) {
        $this->az4288Base = $az4288Base;
        return $this;
    }
}
