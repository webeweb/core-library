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
 * Az4245 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4245Trait {

    /**
     * Az4245.
     *
     * @var float
     */
    private $az4245;

    /**
     * Get the az4245.
     *
     * @return float Returns the az4245.
     */
    public function getAz4245() {
        return $this->az4245;
    }

    /**
     * Set the az4245.
     *
     * @param float $az4245 The az4245.
     */
    public function setAz4245($az4245) {
        $this->az4245 = $az4245;
        return $this;
    }
}
