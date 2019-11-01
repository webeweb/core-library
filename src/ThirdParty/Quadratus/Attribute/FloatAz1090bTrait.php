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
 * Az1090b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1090bTrait {

    /**
     * Az1090b.
     *
     * @var float
     */
    private $az1090b;

    /**
     * Get the az1090b.
     *
     * @return float Returns the az1090b.
     */
    public function getAz1090b() {
        return $this->az1090b;
    }

    /**
     * Set the az1090b.
     *
     * @param float $az1090b The az1090b.
     */
    public function setAz1090b($az1090b) {
        $this->az1090b = $az1090b;
        return $this;
    }
}
