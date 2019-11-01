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
 * Az4266 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4266Trait {

    /**
     * Az4266.
     *
     * @var float
     */
    private $az4266;

    /**
     * Get the az4266.
     *
     * @return float Returns the az4266.
     */
    public function getAz4266() {
        return $this->az4266;
    }

    /**
     * Set the az4266.
     *
     * @param float $az4266 The az4266.
     */
    public function setAz4266($az4266) {
        $this->az4266 = $az4266;
        return $this;
    }
}
