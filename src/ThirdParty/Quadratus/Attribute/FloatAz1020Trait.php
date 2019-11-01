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
 * Az1020 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1020Trait {

    /**
     * Az1020.
     *
     * @var float
     */
    private $az1020;

    /**
     * Get the az1020.
     *
     * @return float Returns the az1020.
     */
    public function getAz1020() {
        return $this->az1020;
    }

    /**
     * Set the az1020.
     *
     * @param float $az1020 The az1020.
     */
    public function setAz1020($az1020) {
        $this->az1020 = $az1020;
        return $this;
    }
}
