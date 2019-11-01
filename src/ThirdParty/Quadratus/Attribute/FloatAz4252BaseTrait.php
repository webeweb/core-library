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
 * Az4252 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4252BaseTrait {

    /**
     * Az4252 base.
     *
     * @var float
     */
    private $az4252Base;

    /**
     * Get the az4252 base.
     *
     * @return float Returns the az4252 base.
     */
    public function getAz4252Base() {
        return $this->az4252Base;
    }

    /**
     * Set the az4252 base.
     *
     * @param float $az4252Base The az4252 base.
     */
    public function setAz4252Base($az4252Base) {
        $this->az4252Base = $az4252Base;
        return $this;
    }
}
