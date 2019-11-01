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
 * Az1080 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1080Trait {

    /**
     * Az1080.
     *
     * @var float
     */
    private $az1080;

    /**
     * Get the az1080.
     *
     * @return float Returns the az1080.
     */
    public function getAz1080() {
        return $this->az1080;
    }

    /**
     * Set the az1080.
     *
     * @param float $az1080 The az1080.
     */
    public function setAz1080($az1080) {
        $this->az1080 = $az1080;
        return $this;
    }
}
