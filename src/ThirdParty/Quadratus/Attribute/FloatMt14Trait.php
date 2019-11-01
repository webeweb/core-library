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
 * Mt14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt14Trait {

    /**
     * Mt14.
     *
     * @var float
     */
    private $mt14;

    /**
     * Get the mt14.
     *
     * @return float Returns the mt14.
     */
    public function getMt14() {
        return $this->mt14;
    }

    /**
     * Set the mt14.
     *
     * @param float $mt14 The mt14.
     */
    public function setMt14($mt14) {
        $this->mt14 = $mt14;
        return $this;
    }
}
