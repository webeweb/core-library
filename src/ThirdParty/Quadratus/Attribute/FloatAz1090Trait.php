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
 * Az1090 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1090Trait {

    /**
     * Az1090.
     *
     * @var float
     */
    private $az1090;

    /**
     * Get the az1090.
     *
     * @return float Returns the az1090.
     */
    public function getAz1090() {
        return $this->az1090;
    }

    /**
     * Set the az1090.
     *
     * @param float $az1090 The az1090.
     */
    public function setAz1090($az1090) {
        $this->az1090 = $az1090;
        return $this;
    }
}
