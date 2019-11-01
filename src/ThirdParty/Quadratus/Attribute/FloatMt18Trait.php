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
 * Mt18 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt18Trait {

    /**
     * Mt18.
     *
     * @var float
     */
    private $mt18;

    /**
     * Get the mt18.
     *
     * @return float Returns the mt18.
     */
    public function getMt18() {
        return $this->mt18;
    }

    /**
     * Set the mt18.
     *
     * @param float $mt18 The mt18.
     */
    public function setMt18($mt18) {
        $this->mt18 = $mt18;
        return $this;
    }
}
