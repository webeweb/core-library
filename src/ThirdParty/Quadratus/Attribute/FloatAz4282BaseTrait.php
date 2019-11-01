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
 * Az4282 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4282BaseTrait {

    /**
     * Az4282 base.
     *
     * @var float
     */
    private $az4282Base;

    /**
     * Get the az4282 base.
     *
     * @return float Returns the az4282 base.
     */
    public function getAz4282Base() {
        return $this->az4282Base;
    }

    /**
     * Set the az4282 base.
     *
     * @param float $az4282Base The az4282 base.
     */
    public function setAz4282Base($az4282Base) {
        $this->az4282Base = $az4282Base;
        return $this;
    }
}
