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
 * Az4274 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4274Trait {

    /**
     * Az4274.
     *
     * @var float
     */
    private $az4274;

    /**
     * Get the az4274.
     *
     * @return float Returns the az4274.
     */
    public function getAz4274() {
        return $this->az4274;
    }

    /**
     * Set the az4274.
     *
     * @param float $az4274 The az4274.
     */
    public function setAz4274($az4274) {
        $this->az4274 = $az4274;
        return $this;
    }
}
