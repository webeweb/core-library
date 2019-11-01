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
 * Tr c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrCTrait {

    /**
     * Tr c.
     *
     * @var float
     */
    private $trC;

    /**
     * Get the tr c.
     *
     * @return float Returns the tr c.
     */
    public function getTrC() {
        return $this->trC;
    }

    /**
     * Set the tr c.
     *
     * @param float $trC The tr c.
     */
    public function setTrC($trC) {
        $this->trC = $trC;
        return $this;
    }
}
