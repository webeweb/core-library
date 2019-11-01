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
 * Az1030b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1030bTrait {

    /**
     * Az1030b.
     *
     * @var float
     */
    private $az1030b;

    /**
     * Get the az1030b.
     *
     * @return float Returns the az1030b.
     */
    public function getAz1030b() {
        return $this->az1030b;
    }

    /**
     * Set the az1030b.
     *
     * @param float $az1030b The az1030b.
     */
    public function setAz1030b($az1030b) {
        $this->az1030b = $az1030b;
        return $this;
    }
}
