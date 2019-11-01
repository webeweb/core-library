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
 * Exp biens1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExpBiens1Trait {

    /**
     * Exp biens1.
     *
     * @var float
     */
    private $expBiens1;

    /**
     * Get the exp biens1.
     *
     * @return float Returns the exp biens1.
     */
    public function getExpBiens1() {
        return $this->expBiens1;
    }

    /**
     * Set the exp biens1.
     *
     * @param float $expBiens1 The exp biens1.
     */
    public function setExpBiens1($expBiens1) {
        $this->expBiens1 = $expBiens1;
        return $this;
    }
}
