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
 * Az4278 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4278BaseTrait {

    /**
     * Az4278 base.
     *
     * @var float
     */
    private $az4278Base;

    /**
     * Get the az4278 base.
     *
     * @return float Returns the az4278 base.
     */
    public function getAz4278Base() {
        return $this->az4278Base;
    }

    /**
     * Set the az4278 base.
     *
     * @param float $az4278Base The az4278 base.
     */
    public function setAz4278Base($az4278Base) {
        $this->az4278Base = $az4278Base;
        return $this;
    }
}
