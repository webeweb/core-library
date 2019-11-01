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
 * Az1100b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1100bTrait {

    /**
     * Az1100b.
     *
     * @var float
     */
    private $az1100b;

    /**
     * Get the az1100b.
     *
     * @return float Returns the az1100b.
     */
    public function getAz1100b() {
        return $this->az1100b;
    }

    /**
     * Set the az1100b.
     *
     * @param float $az1100b The az1100b.
     */
    public function setAz1100b($az1100b) {
        $this->az1100b = $az1100b;
        return $this;
    }
}
