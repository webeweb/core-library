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
 * Habs9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs9Trait {

    /**
     * Habs9.
     *
     * @var float
     */
    private $habs9;

    /**
     * Get the habs9.
     *
     * @return float Returns the habs9.
     */
    public function getHabs9() {
        return $this->habs9;
    }

    /**
     * Set the habs9.
     *
     * @param float $habs9 The habs9.
     */
    public function setHabs9($habs9) {
        $this->habs9 = $habs9;
        return $this;
    }
}
