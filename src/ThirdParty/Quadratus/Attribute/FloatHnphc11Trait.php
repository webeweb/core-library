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
 * Hnphc11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHnphc11Trait {

    /**
     * Hnphc11.
     *
     * @var float
     */
    private $hnphc11;

    /**
     * Get the hnphc11.
     *
     * @return float Returns the hnphc11.
     */
    public function getHnphc11() {
        return $this->hnphc11;
    }

    /**
     * Set the hnphc11.
     *
     * @param float $hnphc11 The hnphc11.
     */
    public function setHnphc11($hnphc11) {
        $this->hnphc11 = $hnphc11;
        return $this;
    }
}
