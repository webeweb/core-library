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
 * Az4254 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4254Trait {

    /**
     * Az4254.
     *
     * @var float
     */
    private $az4254;

    /**
     * Get the az4254.
     *
     * @return float Returns the az4254.
     */
    public function getAz4254() {
        return $this->az4254;
    }

    /**
     * Set the az4254.
     *
     * @param float $az4254 The az4254.
     */
    public function setAz4254($az4254) {
        $this->az4254 = $az4254;
        return $this;
    }
}
