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
 * Hs1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHs1Trait {

    /**
     * Hs1.
     *
     * @var float
     */
    private $hs1;

    /**
     * Get the hs1.
     *
     * @return float Returns the hs1.
     */
    public function getHs1() {
        return $this->hs1;
    }

    /**
     * Set the hs1.
     *
     * @param float $hs1 The hs1.
     */
    public function setHs1($hs1) {
        $this->hs1 = $hs1;
        return $this;
    }
}
