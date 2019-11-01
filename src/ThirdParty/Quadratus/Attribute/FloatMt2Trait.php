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
 * Mt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt2Trait {

    /**
     * Mt2.
     *
     * @var float
     */
    private $mt2;

    /**
     * Get the mt2.
     *
     * @return float Returns the mt2.
     */
    public function getMt2() {
        return $this->mt2;
    }

    /**
     * Set the mt2.
     *
     * @param float $mt2 The mt2.
     */
    public function setMt2($mt2) {
        $this->mt2 = $mt2;
        return $this;
    }
}
