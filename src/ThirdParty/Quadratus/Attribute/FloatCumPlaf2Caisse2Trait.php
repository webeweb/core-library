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
 * Cum plaf2 caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlaf2Caisse2Trait {

    /**
     * Cum plaf2 caisse2.
     *
     * @var float
     */
    private $cumPlaf2Caisse2;

    /**
     * Get the cum plaf2 caisse2.
     *
     * @return float Returns the cum plaf2 caisse2.
     */
    public function getCumPlaf2Caisse2() {
        return $this->cumPlaf2Caisse2;
    }

    /**
     * Set the cum plaf2 caisse2.
     *
     * @param float $cumPlaf2Caisse2 The cum plaf2 caisse2.
     */
    public function setCumPlaf2Caisse2($cumPlaf2Caisse2) {
        $this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
        return $this;
    }
}
