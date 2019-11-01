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
 * Az4276 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4276BaseTrait {

    /**
     * Az4276 base.
     *
     * @var float
     */
    private $az4276Base;

    /**
     * Get the az4276 base.
     *
     * @return float Returns the az4276 base.
     */
    public function getAz4276Base() {
        return $this->az4276Base;
    }

    /**
     * Set the az4276 base.
     *
     * @param float $az4276Base The az4276 base.
     */
    public function setAz4276Base($az4276Base) {
        $this->az4276Base = $az4276Base;
        return $this;
    }
}
