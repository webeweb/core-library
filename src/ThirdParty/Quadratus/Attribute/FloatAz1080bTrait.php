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
 * Az1080b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1080bTrait {

    /**
     * Az1080b.
     *
     * @var float
     */
    private $az1080b;

    /**
     * Get the az1080b.
     *
     * @return float Returns the az1080b.
     */
    public function getAz1080b() {
        return $this->az1080b;
    }

    /**
     * Set the az1080b.
     *
     * @param float $az1080b The az1080b.
     */
    public function setAz1080b($az1080b) {
        $this->az1080b = $az1080b;
        return $this;
    }
}
