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
 * Az1081b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1081bTrait {

    /**
     * Az1081b.
     *
     * @var float
     */
    private $az1081b;

    /**
     * Get the az1081b.
     *
     * @return float Returns the az1081b.
     */
    public function getAz1081b() {
        return $this->az1081b;
    }

    /**
     * Set the az1081b.
     *
     * @param float $az1081b The az1081b.
     */
    public function setAz1081b($az1081b) {
        $this->az1081b = $az1081b;
        return $this;
    }
}
