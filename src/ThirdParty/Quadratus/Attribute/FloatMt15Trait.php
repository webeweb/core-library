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
 * Mt15 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt15Trait {

    /**
     * Mt15.
     *
     * @var float
     */
    private $mt15;

    /**
     * Get the mt15.
     *
     * @return float Returns the mt15.
     */
    public function getMt15() {
        return $this->mt15;
    }

    /**
     * Set the mt15.
     *
     * @param float $mt15 The mt15.
     */
    public function setMt15($mt15) {
        $this->mt15 = $mt15;
        return $this;
    }
}
