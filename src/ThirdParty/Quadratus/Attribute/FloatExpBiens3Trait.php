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
 * Exp biens3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExpBiens3Trait {

    /**
     * Exp biens3.
     *
     * @var float
     */
    private $expBiens3;

    /**
     * Get the exp biens3.
     *
     * @return float Returns the exp biens3.
     */
    public function getExpBiens3() {
        return $this->expBiens3;
    }

    /**
     * Set the exp biens3.
     *
     * @param float $expBiens3 The exp biens3.
     */
    public function setExpBiens3($expBiens3) {
        $this->expBiens3 = $expBiens3;
        return $this;
    }
}
