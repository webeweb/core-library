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
 * Az1010b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1010bTrait {

    /**
     * Az1010b.
     *
     * @var float
     */
    private $az1010b;

    /**
     * Get the az1010b.
     *
     * @return float Returns the az1010b.
     */
    public function getAz1010b() {
        return $this->az1010b;
    }

    /**
     * Set the az1010b.
     *
     * @param float $az1010b The az1010b.
     */
    public function setAz1010b($az1010b) {
        $this->az1010b = $az1010b;
        return $this;
    }
}
