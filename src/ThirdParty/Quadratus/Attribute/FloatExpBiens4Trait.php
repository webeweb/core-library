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
 * Exp biens4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExpBiens4Trait {

    /**
     * Exp biens4.
     *
     * @var float
     */
    private $expBiens4;

    /**
     * Get the exp biens4.
     *
     * @return float Returns the exp biens4.
     */
    public function getExpBiens4() {
        return $this->expBiens4;
    }

    /**
     * Set the exp biens4.
     *
     * @param float $expBiens4 The exp biens4.
     */
    public function setExpBiens4($expBiens4) {
        $this->expBiens4 = $expBiens4;
        return $this;
    }
}
