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
 * Az4290 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4290BaseTrait {

    /**
     * Az4290 base.
     *
     * @var float
     */
    private $az4290Base;

    /**
     * Get the az4290 base.
     *
     * @return float Returns the az4290 base.
     */
    public function getAz4290Base() {
        return $this->az4290Base;
    }

    /**
     * Set the az4290 base.
     *
     * @param float $az4290Base The az4290 base.
     */
    public function setAz4290Base($az4290Base) {
        $this->az4290Base = $az4290Base;
        return $this;
    }
}
