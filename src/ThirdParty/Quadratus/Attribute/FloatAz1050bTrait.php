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
 * Az1050b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1050bTrait {

    /**
     * Az1050b.
     *
     * @var float
     */
    private $az1050b;

    /**
     * Get the az1050b.
     *
     * @return float Returns the az1050b.
     */
    public function getAz1050b() {
        return $this->az1050b;
    }

    /**
     * Set the az1050b.
     *
     * @param float $az1050b The az1050b.
     */
    public function setAz1050b($az1050b) {
        $this->az1050b = $az1050b;
        return $this;
    }
}
