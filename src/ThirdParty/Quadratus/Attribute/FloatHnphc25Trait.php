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
 * Hnphc25 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHnphc25Trait {

    /**
     * Hnphc25.
     *
     * @var float
     */
    private $hnphc25;

    /**
     * Get the hnphc25.
     *
     * @return float Returns the hnphc25.
     */
    public function getHnphc25() {
        return $this->hnphc25;
    }

    /**
     * Set the hnphc25.
     *
     * @param float $hnphc25 The hnphc25.
     */
    public function setHnphc25($hnphc25) {
        $this->hnphc25 = $hnphc25;
        return $this;
    }
}
