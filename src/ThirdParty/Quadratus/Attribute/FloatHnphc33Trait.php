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
 * Hnphc33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHnphc33Trait {

    /**
     * Hnphc33.
     *
     * @var float
     */
    private $hnphc33;

    /**
     * Get the hnphc33.
     *
     * @return float Returns the hnphc33.
     */
    public function getHnphc33() {
        return $this->hnphc33;
    }

    /**
     * Set the hnphc33.
     *
     * @param float $hnphc33 The hnphc33.
     */
    public function setHnphc33($hnphc33) {
        $this->hnphc33 = $hnphc33;
        return $this;
    }
}
