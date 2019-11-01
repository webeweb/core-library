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
 * Cum base tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTr2Trait {

    /**
     * Cum base tr2.
     *
     * @var float
     */
    private $cumBaseTr2;

    /**
     * Get the cum base tr2.
     *
     * @return float Returns the cum base tr2.
     */
    public function getCumBaseTr2() {
        return $this->cumBaseTr2;
    }

    /**
     * Set the cum base tr2.
     *
     * @param float $cumBaseTr2 The cum base tr2.
     */
    public function setCumBaseTr2($cumBaseTr2) {
        $this->cumBaseTr2 = $cumBaseTr2;
        return $this;
    }
}
