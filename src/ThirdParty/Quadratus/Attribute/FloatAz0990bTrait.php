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
 * Az0990b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz0990bTrait {

    /**
     * Az0990b.
     *
     * @var float
     */
    private $az0990b;

    /**
     * Get the az0990b.
     *
     * @return float Returns the az0990b.
     */
    public function getAz0990b() {
        return $this->az0990b;
    }

    /**
     * Set the az0990b.
     *
     * @param float $az0990b The az0990b.
     */
    public function setAz0990b($az0990b) {
        $this->az0990b = $az0990b;
        return $this;
    }
}
