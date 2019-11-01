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
 * Az4215 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4215Trait {

    /**
     * Az4215.
     *
     * @var float
     */
    private $az4215;

    /**
     * Get the az4215.
     *
     * @return float Returns the az4215.
     */
    public function getAz4215() {
        return $this->az4215;
    }

    /**
     * Set the az4215.
     *
     * @param float $az4215 The az4215.
     */
    public function setAz4215($az4215) {
        $this->az4215 = $az4215;
        return $this;
    }
}
