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
 * Az4269 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4269BaseTrait {

    /**
     * Az4269 base.
     *
     * @var float
     */
    private $az4269Base;

    /**
     * Get the az4269 base.
     *
     * @return float Returns the az4269 base.
     */
    public function getAz4269Base() {
        return $this->az4269Base;
    }

    /**
     * Set the az4269 base.
     *
     * @param float $az4269Base The az4269 base.
     */
    public function setAz4269Base($az4269Base) {
        $this->az4269Base = $az4269Base;
        return $this;
    }
}
