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
 * Az4228 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4228BaseTrait {

    /**
     * Az4228 base.
     *
     * @var float
     */
    private $az4228Base;

    /**
     * Get the az4228 base.
     *
     * @return float Returns the az4228 base.
     */
    public function getAz4228Base() {
        return $this->az4228Base;
    }

    /**
     * Set the az4228 base.
     *
     * @param float $az4228Base The az4228 base.
     */
    public function setAz4228Base($az4228Base) {
        $this->az4228Base = $az4228Base;
        return $this;
    }
}
