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
 * Hs2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHs2Trait {

    /**
     * Hs2.
     *
     * @var float
     */
    private $hs2;

    /**
     * Get the hs2.
     *
     * @return float Returns the hs2.
     */
    public function getHs2() {
        return $this->hs2;
    }

    /**
     * Set the hs2.
     *
     * @param float $hs2 The hs2.
     */
    public function setHs2($hs2) {
        $this->hs2 = $hs2;
        return $this;
    }
}
