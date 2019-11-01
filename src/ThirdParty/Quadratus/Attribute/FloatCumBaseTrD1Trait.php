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
 * Cum base tr d1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrD1Trait {

    /**
     * Cum base tr d1.
     *
     * @var float
     */
    private $cumBaseTrD1;

    /**
     * Get the cum base tr d1.
     *
     * @return float Returns the cum base tr d1.
     */
    public function getCumBaseTrD1() {
        return $this->cumBaseTrD1;
    }

    /**
     * Set the cum base tr d1.
     *
     * @param float $cumBaseTrD1 The cum base tr d1.
     */
    public function setCumBaseTrD1($cumBaseTrD1) {
        $this->cumBaseTrD1 = $cumBaseTrD1;
        return $this;
    }
}
