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
 * Mt prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtPrevTrait {

    /**
     * Mt prev.
     *
     * @var float
     */
    private $mtPrev;

    /**
     * Get the mt prev.
     *
     * @return float Returns the mt prev.
     */
    public function getMtPrev() {
        return $this->mtPrev;
    }

    /**
     * Set the mt prev.
     *
     * @param float $mtPrev The mt prev.
     */
    public function setMtPrev($mtPrev) {
        $this->mtPrev = $mtPrev;
        return $this;
    }
}
