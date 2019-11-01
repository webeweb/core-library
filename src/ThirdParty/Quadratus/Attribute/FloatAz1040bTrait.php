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
 * Az1040b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1040bTrait {

    /**
     * Az1040b.
     *
     * @var float
     */
    private $az1040b;

    /**
     * Get the az1040b.
     *
     * @return float Returns the az1040b.
     */
    public function getAz1040b() {
        return $this->az1040b;
    }

    /**
     * Set the az1040b.
     *
     * @param float $az1040b The az1040b.
     */
    public function setAz1040b($az1040b) {
        $this->az1040b = $az1040b;
        return $this;
    }
}
