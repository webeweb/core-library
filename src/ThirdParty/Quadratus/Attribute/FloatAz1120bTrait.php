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
 * Az1120b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1120bTrait {

    /**
     * Az1120b.
     *
     * @var float
     */
    private $az1120b;

    /**
     * Get the az1120b.
     *
     * @return float Returns the az1120b.
     */
    public function getAz1120b() {
        return $this->az1120b;
    }

    /**
     * Set the az1120b.
     *
     * @param float $az1120b The az1120b.
     */
    public function setAz1120b($az1120b) {
        $this->az1120b = $az1120b;
        return $this;
    }
}
