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
 * Tr b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrBTrait {

    /**
     * Tr b.
     *
     * @var float
     */
    private $trB;

    /**
     * Get the tr b.
     *
     * @return float Returns the tr b.
     */
    public function getTrB() {
        return $this->trB;
    }

    /**
     * Set the tr b.
     *
     * @param float $trB The tr b.
     */
    public function setTrB($trB) {
        $this->trB = $trB;
        return $this;
    }
}
