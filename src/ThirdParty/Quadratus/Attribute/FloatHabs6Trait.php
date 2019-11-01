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
 * Habs6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs6Trait {

    /**
     * Habs6.
     *
     * @var float
     */
    private $habs6;

    /**
     * Get the habs6.
     *
     * @return float Returns the habs6.
     */
    public function getHabs6() {
        return $this->habs6;
    }

    /**
     * Set the habs6.
     *
     * @param float $habs6 The habs6.
     */
    public function setHabs6($habs6) {
        $this->habs6 = $habs6;
        return $this;
    }
}
