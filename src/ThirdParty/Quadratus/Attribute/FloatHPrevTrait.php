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
 * H prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHPrevTrait {

    /**
     * H prev.
     *
     * @var float
     */
    private $hPrev;

    /**
     * Get the h prev.
     *
     * @return float Returns the h prev.
     */
    public function getHPrev() {
        return $this->hPrev;
    }

    /**
     * Set the h prev.
     *
     * @param float $hPrev The h prev.
     */
    public function setHPrev($hPrev) {
        $this->hPrev = $hPrev;
        return $this;
    }
}
