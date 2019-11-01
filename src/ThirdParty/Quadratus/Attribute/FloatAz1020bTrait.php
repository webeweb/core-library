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
 * Az1020b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1020bTrait {

    /**
     * Az1020b.
     *
     * @var float
     */
    private $az1020b;

    /**
     * Get the az1020b.
     *
     * @return float Returns the az1020b.
     */
    public function getAz1020b() {
        return $this->az1020b;
    }

    /**
     * Set the az1020b.
     *
     * @param float $az1020b The az1020b.
     */
    public function setAz1020b($az1020b) {
        $this->az1020b = $az1020b;
        return $this;
    }
}
