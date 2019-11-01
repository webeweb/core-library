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
 * Az4257 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4257Trait {

    /**
     * Az4257.
     *
     * @var float
     */
    private $az4257;

    /**
     * Get the az4257.
     *
     * @return float Returns the az4257.
     */
    public function getAz4257() {
        return $this->az4257;
    }

    /**
     * Set the az4257.
     *
     * @param float $az4257 The az4257.
     */
    public function setAz4257($az4257) {
        $this->az4257 = $az4257;
        return $this;
    }
}
