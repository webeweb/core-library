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
 * Az4245 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4245BaseTrait {

    /**
     * Az4245 base.
     *
     * @var float
     */
    private $az4245Base;

    /**
     * Get the az4245 base.
     *
     * @return float Returns the az4245 base.
     */
    public function getAz4245Base() {
        return $this->az4245Base;
    }

    /**
     * Set the az4245 base.
     *
     * @param float $az4245Base The az4245 base.
     */
    public function setAz4245Base($az4245Base) {
        $this->az4245Base = $az4245Base;
        return $this;
    }
}
