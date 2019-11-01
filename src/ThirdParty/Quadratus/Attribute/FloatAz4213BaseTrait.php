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
 * Az4213 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4213BaseTrait {

    /**
     * Az4213 base.
     *
     * @var float
     */
    private $az4213Base;

    /**
     * Get the az4213 base.
     *
     * @return float Returns the az4213 base.
     */
    public function getAz4213Base() {
        return $this->az4213Base;
    }

    /**
     * Set the az4213 base.
     *
     * @param float $az4213Base The az4213 base.
     */
    public function setAz4213Base($az4213Base) {
        $this->az4213Base = $az4213Base;
        return $this;
    }
}
