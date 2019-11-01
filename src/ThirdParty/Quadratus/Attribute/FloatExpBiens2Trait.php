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
 * Exp biens2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExpBiens2Trait {

    /**
     * Exp biens2.
     *
     * @var float
     */
    private $expBiens2;

    /**
     * Get the exp biens2.
     *
     * @return float Returns the exp biens2.
     */
    public function getExpBiens2() {
        return $this->expBiens2;
    }

    /**
     * Set the exp biens2.
     *
     * @param float $expBiens2 The exp biens2.
     */
    public function setExpBiens2($expBiens2) {
        $this->expBiens2 = $expBiens2;
        return $this;
    }
}
