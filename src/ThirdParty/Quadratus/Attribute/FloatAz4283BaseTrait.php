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
 * Az4283 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4283BaseTrait {

    /**
     * Az4283 base.
     *
     * @var float
     */
    private $az4283Base;

    /**
     * Get the az4283 base.
     *
     * @return float Returns the az4283 base.
     */
    public function getAz4283Base() {
        return $this->az4283Base;
    }

    /**
     * Set the az4283 base.
     *
     * @param float $az4283Base The az4283 base.
     */
    public function setAz4283Base($az4283Base) {
        $this->az4283Base = $az4283Base;
        return $this;
    }
}
