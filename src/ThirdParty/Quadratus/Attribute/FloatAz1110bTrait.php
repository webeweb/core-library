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
 * Az1110b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1110bTrait {

    /**
     * Az1110b.
     *
     * @var float
     */
    private $az1110b;

    /**
     * Get the az1110b.
     *
     * @return float Returns the az1110b.
     */
    public function getAz1110b() {
        return $this->az1110b;
    }

    /**
     * Set the az1110b.
     *
     * @param float $az1110b The az1110b.
     */
    public function setAz1110b($az1110b) {
        $this->az1110b = $az1110b;
        return $this;
    }
}
